<?php

namespace App\Http\Controllers;

use App\Http\Requests\EmailRequest;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Mail;

class MailController extends Controller
{
    public function send(EmailRequest $request)
    {
        // Collect info from forms
        $name = $request->input('name');
        $from_email = $request->input('email');
        $message_text = $request->input('message');

        Mail::send('emails.contact-us', ['name' => $name, 'message_text' => $message_text], function($message) use ($name, $from_email)
        {
            $message->from($from_email, $name);
            $message->to('kevindevtester@gmail.com', 'Kevin Eger')->subject('MyFollowUp - Contact Us');
        });
        return redirect('/');
    }
}
