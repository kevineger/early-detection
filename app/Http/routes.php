<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

/*---Static Pages------------------------------------------------*/
/*---------------------------------------------------------------*/
// Home Page
Route::get('/', 'PagesController@home');
// Contact Us
Route::get('contact', 'PagesController@contact');
Route::post('contact', 'MailController@send');
// Research Opportunities
Route::get('research', 'PagesController@research');

/*---Administration----------------------------------------------*/
/*---------------------------------------------------------------*/
Route::group(['middleware' => 'auth'], function () {
    // Dashboard
    Route::get('admin', ['uses' => 'UsersController@index']);

    // Upload
    Route::post('upload', 'UploadController@upload');

    // People
    Route::get('admin/peoples', ['uses' => 'PeoplesController@managePeopleIndex', 'as' => 'admin.peoples']);
    Route::put('admin/peoples', ['uses' => 'PeoplesController@managePeopleIndex']);
    Route::post('admin/peoples', ['uses' => 'PeoplesController@managePeopleStore']);
    Route::get('admin/peoples/create', ['uses' => 'PeoplesController@managePeopleCreate']);
    Route::get('admin/peoples/{peoples}/edit', ['uses' => 'PeoplesController@managePeopleEdit', 'as' => 'admin.peoples.edit']);
    Route::patch('admin/peoples/{peoples}', ['uses' => 'PeoplesController@managePeopleUpdate']);
    Route::delete('admin/peoples/{peoples}', ['uses' => 'PeoplesController@managePeopleDestroy', 'as' => 'admin.peoples.destroy']);
    Route::get('admin/peoples/{peoples}', ['uses' => 'PeoplesController@managePeopleShow']);

    // Projects
    Route::get('admin/projects', ['uses' => 'ProjectsController@manageProjectIndex', 'as' => 'admin.projects']);
    Route::put('admin/projects', ['uses' => 'ProjectsController@manageProjectIndex']);
    Route::post('admin/projects', ['uses' => 'ProjectsController@manageProjectStore']);
    Route::get('admin/projects/create', ['uses' => 'ProjectsController@manageProjectCreate']);
    Route::get('admin/projects/{projects}/edit', ['uses' => 'ProjectsController@manageProjectEdit']);
    Route::patch('admin/projects/{projects}', ['uses' => 'ProjectsController@manageProjectUpdate']);
    Route::delete('admin/projects/{projects}', ['uses' => 'ProjectsController@manageProjectDestroy', 'as' => 'admin.projects.destroy']);
    Route::get('admin/projects/{projects}', ['uses' => 'ProjectsController@manageProjectShow']);

    // Publications
    Route::get('admin/publications', ['uses' => 'PublicationsController@managePublicationIndex', 'as' => 'admin.publications']);
    Route::put('admin/publications', ['uses' => 'PublicationsController@managePublicationIndex']);
    Route::post('admin/publications', ['uses' => 'PublicationsController@managePublicationStore']);
    Route::get('admin/publications/create', ['uses' => 'PublicationsController@managePublicationCreate']);
    Route::get('admin/publications/{publications}/edit', ['uses' => 'PublicationsController@managePublicationEdit']);
    Route::patch('admin/publications/{publications}', ['uses' => 'PublicationsController@managePublicationUpdate']);
    Route::delete('admin/publications/{publications}', ['uses' => 'PublicationsController@managePublicationDestroy', 'as' => 'admin.publications.destroy']);
    Route::get('admin/publications/{publications}', ['uses' => 'PublicationsController@managePublicationShow']);

    // Pages
    Route::get('admin/pages', ['uses' => 'PagesController@managePublicationIndex']);
});

/*---People------------------------------------------------------*/
/*---------------------------------------------------------------*/
// People Route Resource
Route::get('peoples', 'PeoplesController@index');
Route::get('peoples/current-students', 'PeoplesController@indexType');
Route::get('peoples/past-students', 'PeoplesController@indexType');
Route::get('peoples/current-staff', 'PeoplesController@indexType');
Route::get('peoples/past-staff', 'PeoplesController@indexType');
Route::get('peoples/partners', 'PeoplesController@indexPartners');
Route::get('peoples/{peoples}', 'PeoplesController@show');

/*---Projects----------------------------------------------------*/
/*---------------------------------------------------------------*/
// Projects Route Resource
Route::get('projects', 'ProjectsController@index');
Route::get('projects/{projects}', 'ProjectsController@show');

/*---Publications------------------------------------------------*/
/*---------------------------------------------------------------*/
// Publications Route Resource
Route::get('publications', 'PublicationsController@index');
Route::get('publications/{publications}', 'PublicationsController@show');

/*---Authentication----------------------------------------------*/
/*---------------------------------------------------------------*/
// Login routes
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');

