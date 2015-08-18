<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class UsersController extends Controller
{

    /**
     * Display the admin panel.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('admin.index');
    }

    /**
     * Show the form for creating a new admin.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.create');
    }

    /**
     * Store a newly created admin in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified admin.
     *
     * @param  User  $user
     * @return Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified admin.
     *
     * @param  User   $user
     * @return Response
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified admin in storage.
     *
     * @param  Request  $request
     * @param  User  $user
     * @return Response
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified admin from storage.
     *
     * @param  User  $user
     * @return Response
     */
    public function destroy(User $user)
    {
        //
    }

}
