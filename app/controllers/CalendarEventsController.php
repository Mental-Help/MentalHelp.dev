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

		$events = $query->orderBy('updated_at')->paginate(16)
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /calendarevents/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /calendarevents
	 *
	 * @return Response
	 */
	public function store()
	{
		//
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
		//
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
		//
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
		//
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
		//
	}

}