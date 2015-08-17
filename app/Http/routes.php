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
Route::get('admin', 'UsersController@index');
/*---------------------------------------------------------------*/

/*---People------------------------------------------------------*/
/*---------------------------------------------------------------*/
// People Route Resource
Route::get('people', 'PeoplesController@index');
/*---------------------------------------------------------------*/

/*---Projects----------------------------------------------------*/
/*---------------------------------------------------------------*/
// Projects Route Resource
Route::resource('people', 'PeoplesController');
/*---------------------------------------------------------------*/

/*---Publications------------------------------------------------*/
/*---------------------------------------------------------------*/
// Publications Route Resource
Route::resource('people', 'PeoplesController');
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

