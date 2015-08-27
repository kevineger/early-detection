<?php

namespace App\Http\Controllers;

use App\Http\Requests\PeopleRequest;
use App\People;
use App\Project;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Collection;

use Image;

class PeoplesController extends Controller {

    /**
     * Display a listing of the resource.
     *
     */
    public function index()
    {
        $peoples = People::all();

        return view('people.dashboard', ['peoples' => $peoples]);
    }

    /**
     * Display a listing of people with specified type.
     *
     */
    public function indexType(Request $request)
    {
        $peoples = People::all();

        // Get the correct people
        if ($request->is('*/current-students'))
        {
            $peoples = People::getPeopleType('current_student');
        } else if ($request->is('*/past-students'))
        {
            $peoples = People::getPeopleType('past_student');
        } else if ($request->is('*/current-staff'))
        {
            $peoples = People::getPeopleType('current_staff');
        } else if ($request->is('*/past-staff'))
        {
            $peoples = People::getPeopleType('past_staff');
        }

        return view('people.index', ['peoples' => $peoples]);
    }

    public function indexPartners()
    {
        $peoples = People::getPeopleType('partner');

        return view('people.partners', ['peoples' => $peoples]);
    }

    /**
     * Display the specified people.
     *
     * @param People $people
     * @return \Illuminate\View\View
     */
    public function show(People $people)
    {
        return view('people.show', ['people' => $people]);
    }

    /**************************************************************/
    /*Admin Management Methods*************************************/
    /**************************************************************/

    /**
     * Display a listing of all manageable people.
     *
     * @param Request $request
     * @return \Illuminate\View\View
     */
    public function managePeopleIndex(Request $request)
    {
        // If request is a search
        if ($request->method() === "PUT")
        {
            $peoples = People::where('name', 'LIKE', '%' . $request->search . '%')
                ->where(function ($query) use ($request)
                {
                    if ($request->curr_student_checkbox != null) $query->orWhere('type', '=', 'current_student');
                    if ($request->past_student_checkbox != null) $query->orWhere('type', '=', 'past_student');
                    if ($request->curr_staff_checkbox != null) $query->orWhere('type', '=', 'current_staff');
                    if ($request->past_staff_checkbox != null) $query->orWhere('type', '=', 'past_staff');
                    if ($request->partner_checkbox != null) $query->orWhere('type', '=', 'partner');
                })
                ->get();
        } else
        {
            $peoples = People::all();
        }

        return view('admin.people.index', ['peoples' => $peoples]);
    }

    /**
     * Display the view to create a new people.
     *
     * @return \Illuminate\View\View
     */
    public function managePeopleCreate()
    {
        $type_list = Collection::make([
            ''                => '',
            'current_student' => "Current Student",
            'past_student'    => "Past Student",
            'current_staff'   => "Current Staff",
            'past_staff'      => "Past Staff",
            'partner'         => "Partner"]);

        $project_list = Project::lists('name', 'id');

        return view('admin.people.create', ['type_list' => $type_list, 'project_list' => $project_list]);
    }

    /**
     * Show the view for cropping the thumbnail.
     *
     * @param People $people
     * @return \Illuminate\View\View
     */
    public function manageCrop(People $people)
    {
        $image = $people->image;

        return view('admin.people.crop', ['image' => $image]);
    }

    /**
     * Override the image with the new corp dimensions.
     *
     * @param People $people
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function manageCropStore(People $people, Request $request)
    {
        $img = Image::make('images/' . $people->image);
        $img->crop((int)$request->width, (int)$request->height, (int)$request->xPos, (int)$request->yPos);
        $img->save();

        return redirect()->action('PeoplesController@managePeopleShow', [$people]);
    }

    /**
     * Store a newly created people in storage.
     *
     * @param PeopleRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function managePeopleStore(PeopleRequest $request)
    {
        $people = People::create($request->all());

        if (!is_null($request->project)) {
            $people->projects()->sync($request->project);
        }


        // If there was an image attached, update image
        if ($request->hasFile('image'))
        {
            $this->addImage($people, $request, 'image');
        }
        if ($request->hasFile('image2'))
        {
            $this->addImage($people, $request, 'image2');
        }

//        return redirect()->action('PeoplesController@managePeopleShow', [$people]);
        return redirect()->action('PeoplesController@manageCropStore', [$people]);

    }

    /**
     * Display the specified people.
     *
     * @param People $people
     * @return \Illuminate\View\View
     */
    public function managePeopleShow(People $people)
    {
        return view('admin.people.show', ['people' => $people]);
    }

    /**
     * Display the view to edit an existing people.
     * @param People $people
     * @return \Illuminate\View\View
     */
    public function managePeopleEdit(People $people)
    {
        $type_list = Collection::make([
            'current_student' => "Current Student",
            'past_student'    => "Past Student",
            'current_staff'   => "Current Staff",
            'past_staff'      => "Past Staff",
            'partner'         => "Partner"]);

        $project_list = Project::lists('name', 'id');

        return view('admin.people.edit', [
            'people'       => $people,
            'type_list'    => $type_list,
            'project_list' => $project_list,
        ]);
    }

    /**
     * Store changes to an existing people in storage.
     *
     * @param PeopleRequest $request
     * @param People $people
     * @return \Illuminate\Http\RedirectResponse
     */
    public function managePeopleUpdate(PeopleRequest $request, People $people)
    {
        $people->update($request->all());

        $people->projects()->sync($request->project);

        // If there was an image attached, update image
        if ($request->hasFile('image'))
        {
            $this->addImage($people, $request, 'image');
        }
        if ($request->hasFile('image2'))
        {
            $this->addImage($people, $request, 'image2');
        }

        return redirect()->action('PeoplesController@managePeopleShow', [$people]);
    }

    /**
     * Delete an existing people from storage.
     *
     * @param People $people
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     * @throws \Exception
     */
    public function managePeopleDestroy(People $people)
    {
        $people->delete();

        return redirect('admin/peoples');
    }

    /**
     * Helper method for adding/saving an image to a person.
     *
     * @param $people
     * @param $request
     */
    public function addImage($people, $request, $name)
    {
        $file = $request->file($name);
        $filename = $this->slugify($people->name) . '_' . $name . '_' . time() . '.' . $file->getClientOriginalExtension();
        $path = 'images/' . $filename;
        $img = Image::make($file);
        $img->save($path);
        // Save image to person
        if ($name === 'image') $people->image = $filename;
        else if ($name === 'image2') $people->image2 = $filename;
        $people->save();
    }

    static public function slugify($text)
    {
        // replace non letter or digits by -
        $text = preg_replace('~[^\\pL\d]+~u', '-', $text);

        // trim
        $text = trim($text, '-');

        // transliterate
        $text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);

        // lowercase
        $text = strtolower($text);

        // remove unwanted characters
        $text = preg_replace('~[^-\w]+~', '', $text);

        if (empty($text))
        {
            return 'n-a';
        }

        return $text;
    }

}
