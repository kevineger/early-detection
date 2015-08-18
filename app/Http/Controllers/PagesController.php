<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{

    /**
     * Display the home page.
     *
     * @return \Illuminate\View\View
     */
    public function home()
    {
        return view('pages.home');
    }

    /**
     * Display the contact page.
     *
     * @return \Illuminate\View\View
     */
    public function contact()
    {
        return view('pages.contact');
    }

    /**
     * Display the research opportunities page.
     *
     * @return \Illuminate\View\View
     */
    public function research()
    {
        return view('pages.research');
    }

    /**************************************************************/
    /*Admin Management Methods*************************************/
    /**************************************************************/

    /*---Static Pages->-*/

    public function managePublicationIndex()
    {
        return view('admin.pages.index');
    }

//    public function managePublicationCreate(Publication $publication)
//    {
//
//    }
//
//    public function managePublicationStore(Request $request)
//    {
//
//    }
//
//    public function managePublicationShow(Publication $publication)
//    {
//
//    }
//
//    public function managePublicationEdit(Publication $publication)
//    {
//
//    }
//
//    public function managePublicationUpdate(Request $request, Publication $publication)
//    {
//
//    }

    /*-<-Static Pages---*/
}
