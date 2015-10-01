<?php

class CalendarEventsController extends \BaseController {

	protected $entrustPerms = array(
		'create'  => ['can_edit_own_posts', 'can_edit_another_users_posts'],
		'edit'    => ['can_edit_own_posts', 'can_edit_another_users_posts'],
		'destroy' => 'can_edit_another_users_posts'
	);

	/**
	 * Display a listing of the resource.
	 * GET /calendarevents
	 *
	 * @return Response
	 */
	public function index()
	{
		$query = CalendarEvent::with('tags', 'owner');

		$search = strtolower(Input::get('search'));

		if($search) {
			$query->where('title', 'like', '%' . $search . '%');
			$query->orWhere('description', 'like', '%' . $search . '%');
			$query->orWhereHas('tags', function($q) {
				$search = Input::get('search');
				$q->where('tag', 'like', '%' . $search . '%');
			});
			$query->orWhereHas('owner', function($q) {
				$search = Input::get('search');
				$q->where('username', 'like', '%' . $search . '%')
					->where('remain_anonymous', '=', false);
			});
		}

		$events = $query->orderBy('updated_at')->paginate(5);

		return View::make('events.index')->with('events', $events);
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /calendarevents/create
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('events.create');
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /calendarevents
	 *
	 * @return Response
	 */
	public function store()
	{
		$event = new CalendarEvent();

		return $this->validateAndSave($event);
	}

	/**
	 * Display the specified resource.
	 * GET /calendarevents/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$event = CalendarEvent::findOrFail($id);

		if (!$event){

			Log::info('404', Input::all());

			App::abort(404);
		}

		return View::make('events.show')->with('event', $event);
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /calendarevents/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$event = CalendarEvent::findOrFail($id);

		if (!$event) {
			Log::info('Attempt to edit a non-event!');

			if ($event->user_id != Auth::id()) {
				Log::info('Attempt to edit event of different owner');
			}

			App::abort(404);
		}

		return View::make('events.edit')->with('event', $event);
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /calendarevents/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$event = CalendarEvent::findOrFail($id);

		if (!$event) {
			Log::info('Attempt to edit a non-event!');

			if ($event->user_id != Auth::id()) {
				Log::info('Attempt to edit event of different owner');
			}

			App::abort(404);
		}

		return $this->validateAndSave($event);
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /calendarevents/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$event = CalendarEvent::find($id);

		if (!$event){
			Log::info('Attempt to edit a non-event!' . Auth::user());

			if($event->user_id != Auth::id()) {
				Log::info('Attempt to delete event of different owner' . Auth::user());
			}
			App::abort(404);
		}

		$event->delete();

		return Redirect::action('CalendarEventsController@index');
	}

	public function validateAndSave($event)
	{
		try {
			$event->title 		= Input::get('title');
			$event->description = Input::get('description');
			$event->start_time  = Input::get('start_time');
			$event->end_time    = Input::get('end_time');
			$event->user_id 	= Auth::id();

			Log::info("User Event created successfully.");

			Log::info("Log Message", array('context' => Input::all()));

			return Redirect::action('CalendarEventsController@show', array($event->id));

		} catch (Watson\Validating\ValidationException $e) {

			Session::flash('errorMessage',
				'Ohh no! Something went wrong. You should be seeing some errors down below.');

			Log::info('Validation failed', Input::all());

			Log::info($e->getErrors()->toArray());
			return Redirect::back()->withErrors($e->getErrors())->withInput();
		}
	}

	public function rsvp($id)
	{
		$event = CalendarEvent::findOrFail($id);

		$event->attendees()->attach(Auth::id());
	}
}