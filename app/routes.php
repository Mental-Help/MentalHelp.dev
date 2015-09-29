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
