<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PublicationsController extends Controller
{

    /**
     * Display a listing of the publications.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('publication.index');
    }

    /**
     * Show the form for creating a new publication.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created publication in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified publication.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified publication.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified publication in storage.
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
     * Remove the specified publication from storage.
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

    /*---Publication->-*/

    public function managePublicationIndex()
    {
        return view('admin.publication.index');
    }

    public function managePublicationCreate(Publication $publication)
    {

    }

    public function managePublicationStore(Request $request)
    {

    }

    public function managePublicationShow(Publication $publication)
    {

    }

    public function managePublicationEdit(Publication $publication)
    {

    }

    public function managePublicationUpdate(Request $request, Publication $publication)
    {

    }

    /*-<-Publication---*/
}
