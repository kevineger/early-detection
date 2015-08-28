<?php

namespace App\Http\Controllers;

use App\Email;
use App\Http\Requests\CreateEmailRequest;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class EmailsController extends Controller
{

    /**
     * Delete an existing people from storage.
     *
     * @param Email $email
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     * @internal param People $people
     */
    public function destroy(Email $email)
    {
        $email->delete();

        return redirect('admin/pages/emails');
    }

    /**
     * Store a newly created people in storage.
     *
     * @param CreateEmailRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(CreateEmailRequest $request)
    {
        Email::create($request->all());

        return redirect()->action('PagesController@manageEmails');

    }
}
