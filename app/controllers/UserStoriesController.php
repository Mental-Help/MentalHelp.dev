<?php

class UserStoriesController extends \BaseController {

	protected $entrustPerms = array(
		'create'  => ['can_edit_own_posts', 'can_edit_another_users_posts'];
		'edit'    => ['can_edit_own_posts', 'can_edit_another_users_posts'],
		'destroy' => 'can_edit_another_users_posts'
	);

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
		return View::make('stories.create');
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /userstories
	 *
	 * @return Response
	 */
	public function store()
	{
		$story = new UserStory();
		// validation succeeded, create and save the post
		Log::info("User Story created successfully.");

		Log::info("Log Message", array('context' => Input::all()));

		return $this->validateAndSave($story);
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
		$story = UserStory::findOrFail($id);

		if (!$story) {
			App::abort(404);
		}

		return View::make('stories.show')->with('story', $story);
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
		return View::make('stories.edit');
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
		$story = UserStory::findOrFail($id);

		if(!$story) {
			App::abort(404);
		}

		return $this->validateAndSave($story);
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
		$story = UserStory::findOrFail($id);
		$story->delete();

		Session::flash('successMessage', 'This user story has been successfully deleted.');

		return Redirect::action('UserStoriesController@index');
	}

	public function validateAndSave($story)
	{
		try {

			$story->title	  = Input::get('title');
			$story->body  	  = Input::get('body');
			$story->is_public = Input::get('is_public');

			$profile_id = Auth::user()->profile->id;
			$story->profile_id = $profile_id;

			Log::info('User Profile Created Successfully');

			Log::info('Log Message', array('context', Input::all()));

			return Redirect::action('UserStoriesController@show', array($story->id));

		} catch (Watson\Validating\ValidationException $e) {

			Session::flash('errorMessage',
				'Ohh no! Something went wrong. You should be seeing some errors down below.');

			Log::info('Validation failed', Input::all());

			Log::info($e->getErrors()->toArray());
			return Redirect::back()->withErrors($e->getErrors())->withInput();
		}

}