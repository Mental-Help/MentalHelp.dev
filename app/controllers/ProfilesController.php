<?php

class ProfilesController extends BaseController {

	protected $entrustPerms = array(
		'edit'    => ['can_edit_own_profile', 'can_edit_another_users_profile'],
		'destroy' => 'can_edit_another_users_profile'
	);

	/**
	 * Display a listing of the resource.
	 * GET /profiles
	 *
	 * @return Response
	 */
	public function index()
	{
		$query = Profile::with('userStories', 'user');

		$search = strtolower(Input::get('search'));

		if($search) {
			$query->where('username', 'like', '%' . $search . '%');
			$query->orWhere('public_email', 'like', '%' . $search . '%');
			$query->orWhereHas('userStories', function($q) {
				$search = Input::get('search');
				$q->where('title', 'like', '%' . $search . '%')
				  	->where('is_public', '=', 'true');
			});
			$query->orWhereHas('user', function($q) {
				$search = Input::get('search');
				$q->where('first_name', 'like', '%' . $search . '%')
					->where('remain_anonymous', '=', 'false');
			});
			$query->orWhereHas('user', function($q) {
				$search = Input::get('search');
				$q->where('last_name', 'like', '%' . $search . '%')
					->where('remain_anonymous', '=', 'false');
			});
		}
		$profiles = $query->orderBy('updated_at')->paginate(4);
		return View::make('profiles.index')->with('profiles', $profiles);
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /profiles/create
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('profiles.create');

	}

	/**
	 * Store a newly created resource in storage.
	 * POST /profiles
	 *
	 * @return Response
	 */
	public function store()
	{
		$profile = new Profile();
		// validation succeeded, create and save the post
		Log::info("Profile created successfully.");

		Log::info("Log Message", array('context' => Input::all()));

		return $this->validateAndSave($profile);
	}

	/**
	 * Display the specified resource.
	 * GET /profiles/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$profile = Profile::findOrFail($id);

		if (!$profile) {
			App::abort(404);
		}

		return View::make('profiles.show')->with('profile', $profile);
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /profiles/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$profile = Profile::findOrFail($id);

		if (!$profile) {
			App::abort(404);
		}

		return View::make('profiles.edit')->with('profile', $profile);
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /profiles/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$profile = Profile::findOrFail($id);

		if (!$profile) {
			App::abort(404);
		}

		return $this->validateAndSave($profile);
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /profiles/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$profile = Profile::findOrFail($id);
		$profile->delete();

		Session::flash('successMessage', 'This profile has been successfully deleted.');

		return Redirect::action('ProfilesController@index');
	}

	public function validateAndSave($profile)
	{
		try {
			if($profile->user->remain_anonymous == false){
				if(Input::get('is_public') == true) {
					$profile->is_public 	   = Input::get('is_public');
					$profile->about_me		   = Input::get('about_me');
					$profile->can_be_contacted = Input::get('can_be_contacted');
					$profile->public_email	   = Input::get('public_email');
					if (Input::hasFile('image')) {
						$file = Input::file('image');
						$profile->image_url($file);
					}
					$profile->facebook_url 	   = Input::get('facebook_url');
					$profile->twitter_url  	   = Input::get('twitter_url');
					$profile->instagram_url    = Input::get('instagram_url');
				} else {
					$profile->is_public 	   = Input::get('is_public');
					$profile->can_be_contacted = 'false';
					$profile->image_url		   = '/img/default_profile_img.jpeg';
				}

				$profile->user_id = Auth::id();

				$profile->saveOrFail();
			}
			Log::info('User Profile Created Successfully');

			Log::info('Log Message', array('context', Input::all()));

			return Redirect::action('ProfilessController@show', array($profile->id));

		} catch (Watson\Validating\ValidationException $e) {

			Session::flash('errorMessage',
				'Ohh no! Something went wrong. You should be seeing some errors down below.');

			Log::info('Validation failed', Input::all());

			Log::info($e->getErrors()->toArray());
			return Redirect::back()->withErrors($e->getErrors())->withInput();
		}
	}
}