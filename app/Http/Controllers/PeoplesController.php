<?php

namespace App\Http\Controllers;

use App\Http\Requests\PeopleRequest;
use App\People;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Collection;

use Image;

class PeoplesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     */
    public function index()
    {
        $peoples = People::all();

        return view('people.index', ['peoples' => $peoples]);
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
     * @return \Illuminate\View\View
     */
    public function managePeopleIndex()
    {
        $peoples = People::all();

        return view('admin.people.index', ['peoples' => $peoples]);
    }

    /**
     * Display the view to create a new people.
     *
     * @return \Illuminate\View\View
     */
    public function managePeopleCreate()
    {
        $type_list = ['Current Student', 'Past Student', 'Current Staff', 'Past Staff', 'Partner'];

        return view('admin.people.create', ['type_list' => $type_list]);
    }

    /**
     * Store a newly created people in storage.
     *
     * @param PeopleRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function managePeopleStore(PeopleRequest $request)
    {
        $file = $request->file('image');
        $filename = time() . '.' . $file->getClientOriginalExtension();
        $path = 'images/' . $filename;
        $img = Image::make($file);
        $return = $img->save($path);

        dd($return->filename);

        $people = People::create($request->all());

        return redirect()->action('PeoplesController@managePeopleShow', [$people]);
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
            'past_student' => "Past Student",
            'current_staff' => "Current Staff",
            'past_staff' => "Past Staff",
            'partner' => "Partner"]);

        return view('admin.people.edit', [
            'people' => $people,
            'type_list' => $type_list,
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

        return redirect()->action('PeoplesController@managePeopleShow', [$people]);
    }

    /**
     * Delete an existing people from storage.
     *
     * @param People $people
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     * @throws \Exception
     */
    function managePeopleDestroy(People $people)
    {
        $people->delete();

        return redirect('admin/peoples');
    }

}
