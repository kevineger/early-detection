<?php

namespace App\Http\Controllers;

use App\Http\Requests\PublicationRequest;
use App\Publication;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PublicationsController extends Controller {

    /**
     * Display a listing of the resource.
     *
     */
    public function index()
    {
        $publications = Publication::all();

        return view('publication.dashboard', ['publications' => $publications]);
    }

    /**
     * Display a listing of Publication with specified type.
     *
     */
    public function indexType(Request $request)
    {
        $publications = Publication::all();

        // Get the correct Publications
        if ($request->is('*/abstracts-and-conference-proceedings'))
        {
            $publications = Publication::getPublicationType('abstract_conference_commentary')->groupBy(function($p) {
                return Carbon::parse($p->date)->format('Y');
            });
        } else if ($request->is('*/journals'))
        {
            $publications = Publication::getPublicationType('journal')->groupBy(function($p) {
                return Carbon::parse($p->date)->format('Y');
            });
        } else if ($request->is('*/theses'))
        {
            $publications = Publication::getPublicationType('thesis')->groupBy(function($p) {
                return Carbon::parse($p->date)->format('Y');
            });
        }

        return view('publication.index', ['publications' => $publications]);
    }

    /**
     * Display the specified publication.
     *
     * @param Publication $publication
     * @internal param int $id
     */
    public function show(Publication $publication)
    {
        dd($publication);
    }

    /**************************************************************/
    /*Admin Management Methods*************************************/
    /**************************************************************/

    /*---Publication->-*/

    /**
     * Show the index page for Publication.
     *
     * @param Request $request
     * @return \Illuminate\View\View
     */
    public function managePublicationIndex(Request $request)
    {
        // If request is a search
        if ($request->method() === "PUT")
        {
            $publications = Publication::where('name', 'LIKE', '%' . $request->search . '%')
                ->orWhere('reference', 'LIKE', '%' . $request->search . '%')
                ->get();
        } else
        {
            $publications = Publication::all();
        }

        return view('admin.publication.index', ['publications' => $publications]);
    }

    /**
     * Show the create view for a Publication.
     *
     * @return \Illuminate\View\View
     */
    public function managePublicationCreate()
    {
        $publication_type = Collection::make([
            ''                               => '',
            'abstract_conference_commentary' => "Abstract, Conference Proceeding or Commentary",
            'journal'                        => "Peer-Reviewed Journal Article",
            'thesis'                         => "Thesis",
        ]);

        return view('admin.publication.create', ['publication_type' => $publication_type]);
    }

    /**
     * Store the newly created Publication.
     *
     * @param PublicationRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function managePublicationStore(PublicationRequest $request)
    {
        $publication = Publication::create($request->all());

        return redirect()->action('Publicationscontroller@managePublicationShow', [$publication]);
    }

    /**
     * Show the specified Publication.
     *
     * @param Publication $publication
     * @return \Illuminate\View\View
     */
    public function managePublicationShow(Publication $publication)
    {
        return view('admin.publication.show', ['publication' => $publication]);
    }

    /**
     * Show the edit view for the specified Publication.
     *
     * @param Publication $publication
     * @return \Illuminate\View\View
     */
    public function managePublicationEdit(Publication $publication)
    {
        $publication_type = Collection::make([
            'abstract_conference_commentary' => "Abstract, Conference Proceeding or Commentary",
            'journal'                        => "Peer-Reviewed Journal Article",
            'thesis'                         => "Thesis",
        ]);

        return view('admin.publication.edit', ['publication' => $publication, 'publication_type' => $publication_type]);
    }

    /**
     * Update the specified Publication.
     *
     * @param PublicationRequest $request
     * @param Publication $publication
     * @return \Illuminate\Http\RedirectResponse
     */
    public function managePublicationUpdate(PublicationRequest $request, Publication $publication)
    {
        $publication->update($request->all());

        return redirect()->action('PublicationsController@manageProjectShow', [$publication]);

    }

    /**
     * Delete an existing project from storage.
     *
     * @param Publication $publication
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     * @throws \Exception
     * @internal param Publication $project
     */
    function managePublicationDestroy(Publication $publication)
    {
        $publication->delete();

        return redirect('admin/publications');
    }
}
