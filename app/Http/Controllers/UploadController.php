<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;

class UploadController extends Controller
{
    public function upload()
    {
        error_log("Hit Upload");
        if(Input::has('file')) {
            error_log("Uploading File");
            $file = Input::file('file');
            $file->move('uploads', $file->getClientOriginalName());
            error_log("Uploaded: " . $file->getClientOriginalName());
        }
    }
}
