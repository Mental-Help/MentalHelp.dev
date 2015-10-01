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

	public function dropdown()
	{
		return View::make('dropdown-title');
	}

	public function tutorials()
	{
		return View::make('tutorials');
	}

	public function index()
	{
        $eventquery = CalendarEvent::with('tags');
        $storyquery = UserStory::with('tags');

		if(Input::has('tags')) {
			$search = Input::get('tags');

			$storyquery->where('is_public', '=', true)
				->whereHas('tag', 'like', '%' . $search . '%');
			$eventquery->whereHas('tag', 'like', '%' . $search . '%');
		}

        $events  = $eventquery->orderBy('updated_at')->paginate(3);
        $stories = $storyquery->orderBy('updated_at')->paginate(3);

        return View::make('you_are_not_alone')->with('events', $events)->with('stories', $stories);
	}
}
