<?php

namespace App\Http\Controllers;

use App\Http\Requests\PeopleRequest;
use App\People;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PeoplesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        return view('people.index');
    }

    /**
     * Display the specified people.
     *
     * @param People $people
     * @return Response
     */
    public function show(People $people)
    {
        //
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
        return view('admin.people.create');
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
        return view('admin.people.edit', ['people' => $people]);
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
