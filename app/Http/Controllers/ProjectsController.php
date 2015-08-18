<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ProjectsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        return view('project.index');
    }

    /**
     * Show the form for creating a new project.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created project in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified project.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified project.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified project in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified project from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }

    /**************************************************************/
    /*Admin Management Methods*************************************/
    /**************************************************************/

    /*---Project->-*/

    public function manageProjectIndex()
    {
        return view('admin.project.index');
    }

    public function manageProjectCreate(Project $project)
    {

    }

    public function manageProjectStore(Request $request)
    {

    }

    public function manageProjectShow(Project $project)
    {

    }

    public function manageProjectEdit(Project $project)
    {

    }

    public function manageProjectUpdate(Request $request, Project $project)
    {

    }

    /*-<-Project---*/
}
