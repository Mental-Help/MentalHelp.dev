<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

//routes made for Users and Roles controlling
Route::get('users/{users}/user', 'UsersController@role');
Route::put('users/{users}/role', 'UsersController@editRole');
Route::patch('users/{users}/role', 'UsersController@editRole');
Route::get('users/index', 'UsersController@index');
Route::resource('users', 'UsersController');

//routes made for Profile CRUD Controller
Route::resource('profiles', 'ProfilesController');


//routes made for User Stories CRUD Controller
Route::resource('stories', 'UserStoriesController');
Route::get('stories/index', 'UserStoriesController@index');

//routes made for CalendarEvents CRUD Controller
Route::get('events/attendees/{id}', 'CalendarEventsController@rsvp');
Route::get('events/index', 'CalendarEventsController@index');
Route::resource('events', 'CalendarEventsController');

//routes made for front-end purposes
Route::get('/', 'HomeController@showHome');
Route::get('/you_are_not_alone', 'HomeController@index');
Route::get('/tutorials', 'HomeController@tutorials');



// Confide routes
Route::get('auth/create', 'AuthController@create');
Route::post('auth', 'AuthController@store');
Route::get('auth/login', 'AuthController@login');
Route::post('auth/login', 'AuthController@doLogin');
Route::get('auth/confirm/{code}', 'AuthController@confirm');
Route::get('auth/forgot_password', 'AuthController@forgotPassword');
Route::post('auth/forgot_password', 'AuthController@doForgotPassword');
Route::get('auth/reset_password/{token}', 'AuthController@resetPassword');
Route::post('auth/reset_password', 'AuthController@doResetPassword');
Route::get('auth/logout', 'AuthController@logout');
