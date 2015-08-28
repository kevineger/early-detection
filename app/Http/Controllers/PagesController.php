<?php

namespace App\Http\Controllers;

use App\HtmlContent;
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
        $htmlpage = HtmlContent::getPage('research');

        return view('pages.research', ['html_content' => $htmlpage]);
    }

    /**************************************************************/
    /*Admin Management Methods*************************************/
    /**************************************************************/

    /*---Static Pages->-*/

    /**
     * Show the view to manage all static pages.
     *
     * @return \Illuminate\View\View
     */
    public function managePagesIndex()
    {
        return view('admin.pages.index');
    }

    public function manageResearch()
    {
        $htmlpage = HtmlContent::getPage('research');

        return view('admin.pages.research', ['html_content' => $htmlpage]);
    }

    public function manageResearchStore(Request $request)
    {
        $html_content = HtmlContent::getPage('research');
        $html_content->html = $request->html;
        $html_content->save();

        return redirect()->action('PagesController@managePagesIndex');
    }
}
