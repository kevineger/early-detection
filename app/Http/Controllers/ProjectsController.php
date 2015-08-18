<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProjectRequest;
use App\Project;
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

    public function manageProjectIndex()
    {
        $projects = Project::all();

        return view('admin.project.index', ['projects' => $projects]);
    }

    public function manageProjectCreate()
    {
        return view('admin.project.create');
    }

    public function manageProjectStore(ProjectRequest $request)
    {
        $project = Project::create($request->all());

        return redirect()->action('ProjectsController@manageProjectShow', [$project]);
    }

    public function manageProjectShow(Project $project)
    {
        return view('admin.project.show', ['project' => $project]);
    }

    public function manageProjectEdit(Project $project)
    {
        return view('admin.project.edit', ['project' => $project]);
    }

    public function manageProjectUpdate(ProjectRequest $request, Project $project)
    {
        $project->update($request->all());

        return redirect()->action('ProjectsController@manageProjectShow', [$project]);
    }

    function manageProjectDestroy(Project $project)
    {
        $project->delete();

        return redirect('admin/projects');
    }

}
