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

Route::get('/', 'HomeController@showHome');
Route::get('/index', 'HomeController@showIndex');

Route::resource('users/', 'UsersController');

//routes made for front-end purposes
Route::get('/profile/edit', 'HomeController@profile');
Route::get('/dropdown', 'HomeController@dropdown');
Route::get('/users/index', 'HomeController@userIndex');
Route::get('/tutorials', 'HomeController@tutorials');

// Confide routes
Route::get('users/create', 'AuthController@create');
Route::post('users', 'AuthController@store');
Route::get('users/login', 'AuthController@login');
Route::post('users/login', 'AuthController@doLogin');
Route::get('users/confirm/{code}', 'AuthController@confirm');
Route::get('users/forgot_password', 'AuthController@forgotPassword');
Route::post('users/forgot_password', 'AuthController@doForgotPassword');
Route::get('users/reset_password/{token}', 'AuthController@resetPassword');
Route::post('users/reset_password', 'AuthController@doResetPassword');
Route::get('users/logout', 'AuthController@logout');
