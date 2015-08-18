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
// Research Opportunities
Route::get('research', 'PagesController@research');
/*---------------------------------------------------------------*/

/*---Administration----------------------------------------------*/
/*---------------------------------------------------------------*/
// Dashboard
Route::get('admin', ['middleware' => 'auth', 'uses' => 'UsersController@index']);

// People
Route::get('admin/peoples', ['middleware' => 'auth', 'uses' => 'PeoplesController@managePeopleIndex', 'as' => 'admin.peoples']);
Route::post('admin/peoples', ['middleware' => 'auth', 'uses' => 'PeoplesController@managePeopleStore']);
Route::get('admin/peoples/create', ['middleware' => 'auth', 'uses' => 'PeoplesController@managePeopleCreate']);
Route::get('admin/peoples/{peoples}/edit', ['middleware' => 'auth', 'uses' => 'PeoplesController@managePeopleEdit']);
Route::patch('admin/peoples/{peoples}', ['middleware' => 'auth', 'uses' => 'PeoplesController@managePeopleUpdate']);
Route::delete('admin/peoples/{peoples}', ['middleware' => 'auth', 'uses' => 'PeoplesController@managePeopleDestroy', 'as' => 'admin.peoples.destroy']);
Route::get('admin/peoples/{peoples}', ['middleware' => 'auth', 'uses' => 'PeoplesController@managePeopleShow']);

// Projects
Route::get('admin/projects', ['middleware' => 'auth', 'uses' => 'ProjectsController@manageProjectIndex', 'as' => 'admin.projects']);
Route::post('admin/projects', ['middleware' => 'auth', 'uses' => 'ProjectsController@manageProjectStore']);
Route::get('admin/projects/create', ['middleware' => 'auth', 'uses' => 'ProjectsController@manageProjectCreate']);
Route::get('admin/projects/{projects}/edit', ['middleware' => 'auth', 'uses' => 'ProjectsController@manageProjectEdit']);
Route::patch('admin/projects/{projects}', ['middleware' => 'auth', 'uses' => 'ProjectsController@manageProjectUpdate']);
Route::delete('admin/projects/{projects}', ['middleware' => 'auth', 'uses' => 'ProjectsController@manageProjectDestroy', 'as' => 'admin.projects.destroy']);
Route::get('admin/projects/{projects}', ['middleware' => 'auth', 'uses' => 'ProjectsController@manageProjectShow']);

// Publications
Route::get('admin/publications', ['middleware' => 'auth', 'uses' => 'PublicationsController@managePublicationIndex']);

// Pages
Route::get('admin/pages', ['middleware' => 'auth', 'uses' => 'PagesController@managePublicationIndex']);
/*---------------------------------------------------------------*/

/*---People------------------------------------------------------*/
/*---------------------------------------------------------------*/
// People Route Resource
Route::get('peoples', 'PeoplesController@index');
Route::get('peoples/{peoples}', 'PeoplesController@show');
/*---------------------------------------------------------------*/

/*---Projects----------------------------------------------------*/
/*---------------------------------------------------------------*/
// Projects Route Resource
Route::resource('projects', 'ProjectsController');
/*---------------------------------------------------------------*/

/*---Publications------------------------------------------------*/
/*---------------------------------------------------------------*/
// Publications Route Resource
Route::resource('publications', 'PublicationsController');
/*---------------------------------------------------------------*/

/*---Authentication----------------------------------------------*/
/*---------------------------------------------------------------*/
// Login routes
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');
/*---------------------------------------------------------------*/

