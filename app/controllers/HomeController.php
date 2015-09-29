<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function showHome()
	{
		return View::make('home');
	}

	public function showIndex()
	{
		return View::make('layouts.index');
	}

	public function profile()
	{
		return View::make('profiles.edit');

	}
	public function showUserIndex()
	{
		return View::make('users.index');
	}

	public function dropdown()
	{
		return View::make('dropdown-title');
	}

	public function userIndex()
	{
		return View::make('users/index');
	}


	public function showTuts()
	{
		return View::make('tuts');
	}

	public function tutorials()
	{
		return View::make('tutorials');
	}
}
