<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProjectRequest;
use App\Project;
use App\ProjectCategory;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ProjectsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     */
    public function index()
    {
        $projects = Project::all();

        return view('project.index', ['projects' => $projects]);
    }

    /**
     * Display the specified project.
     *
     * @param Project $project
     * @return \Illuminate\View\View
     */
    public function show(Project $project)
    {
        return view('project.show', ['project' => $project]);
    }

    /**************************************************************/
    /*Admin Management Methods*************************************/
    /**************************************************************/

    /**
     * Display a listing of all manageable projects.
     *
     * @return \Illuminate\View\View
     */
    public function manageProjectIndex(Request $request)
    {
        // If request is a search
        if ($request->method()==="PUT") {
            $projects = Project::where('name', 'LIKE', '%'. $request->search .'%')->get();
        }
        else
        {
            $projects = Project::all();
        }

        return view('admin.project.index', ['projects' => $projects]);
    }

    /**
     * Display the view to create a new project.
     *
     * @return \Illuminate\View\View
     */
    public function manageProjectCreate()
    {
        $category_list = ProjectCategory::lists('name', 'id');

        return view('admin.project.create', ['category_list' => $category_list]);
    }

    /**
     * Store a newly created project in storage.
     *
     * @param ProjectRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function manageProjectStore(ProjectRequest $request)
    {
        $category = ProjectCategory::firstorCreate(['name' => $request->project_category_id]);
        $project = new Project;
        $project->name = $request->name;
        $project->project_category_id = $category->id;
        $project->save();

        return redirect()->action('ProjectsController@manageProjectShow', [$project]);
    }

    /**
     * Display the specified project.
     *
     * @param Project $project
     * @return \Illuminate\View\View
     */
    public function manageProjectShow(Project $project)
    {
        return view('admin.project.show', ['project' => $project]);
    }

    /**
     * Display the view to edit an existing project.
     *
     * @param Project $project
     * @return \Illuminate\View\View
     */
    public function manageProjectEdit(Project $project)
    {
        $category_list = ProjectCategory::lists('name', 'id');

        return view('admin.project.edit', ['project' => $project, 'category_list' => $category_list]);
    }

    /**
     * Store changes to an existing project in storage.
     *
     * @param ProjectRequest $request
     * @param Project $project
     * @return \Illuminate\Http\RedirectResponse
     */
    public function manageProjectUpdate(ProjectRequest $request, Project $project)
    {
        $category = ProjectCategory::firstorCreate(['name' => $request->project_category_id]);
        $project->name = $request->name;
        $project->project_category_id = $category->id;
        $project->save();

        return redirect()->action('ProjectsController@manageProjectShow', [$project]);
    }

    /**
     * Delete an existing project from storage.
     *
     * @param Project $project
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     * @throws \Exception
     */
    function manageProjectDestroy(Project $project)
    {
        $project->delete();

        return redirect('admin/projects');
    }

}
