<?php

namespace App\Http\Controllers;

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
     * Show the form for creating a new people.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created people in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        //
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

    /**
     * Show the form for editing the specified people.
     *
     * @param  People  $people
     * @return Response
     */
    public function edit(People $people)
    {
        //
    }

    /**
     * Update the specified people in storage.
     *
     * @param  Request  $request
     * @param  people  $people
     * @return Response
     */
    public function update(Request $request, People $people)
    {
        //
    }

    /**
     * Remove the specified people from storage.
     *
     * @param  People  $people
     * @return Response
     */
    public function destroy(People $people)
    {
        //
    }

    /**************************************************************/
    /*Admin Management Methods*************************************/
    /**************************************************************/

    /*---People->-*/

    public function managePeopleIndex()
    {
        return view('admin.people.index');
    }

    public function managePeopleCreate(People $people)
    {

    }

    public function managePeopleStore(Request $request)
    {

    }

    public function managePeopleShow(People $people)
    {

    }

    public function managePeopleEdit(People $people)
    {

    }

    public function managePeopleUpdate(Request $request, People $people)
    {

    }

    /*-<-People---*/
}
