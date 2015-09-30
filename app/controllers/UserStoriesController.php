<?php

class UserStoriesController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /userstories
	 *
	 * @return Response
	 */
	public function index()
	{
		$query = UserStory::with('tags');

		$search = strtolower(Input::get('search'));

		If($search) {
			$query->where('title', 'like', '%' . $search . '%')
					->where('is_public', '=', true);
			$query->orWhere('body', 'like', '%' . $search . '%')
					->where('is_public', '=', '%' . $search . '%');
			$query->orWhereHas('tags', function($q) {
				$search = Input::get('search');
				$q->where('tag', 'like', '%' . $search . '%');
			});
		}

		$stories = $query->orderBy('updated_at')->paginate(4);

		return View::make('stories.index')->with('stories', $stories);
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /userstories/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /userstories
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 * GET /userstories/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$stories = $stories->orderBy('updated_at')->paginate(4);
		return View::make('profiles.index')->with('stories', $stories);
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /userstories/{id}/edit
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
	 * PUT /userstories/{id}
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
	 * DELETE /userstories/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}