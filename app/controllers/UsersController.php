<?php

class UsersController extends \BaseController {

	protected $entrustPerms = array(

		'index'    => 'can_browse_profiles',
		'show'     => ['can_browse_profiles'],
		'edit'     => ['can_edit_own_profile', 'can_edit_another_users_profile'],
		'update'   => ['can_edit_own_profile', 'can_edit_another_users_profile'],
		'destroy'  => ['can_edit_another_users_profile', 'can_edit_user_roles'],
		'role'     => 'can_edit_user_roles',
		'editRole' => 'can_edit_user_roles'
	);

	/**
	 * Display a listing of the resource.
	 * GET /users
	 *
	 * @return Response
	 */
	public function index()
	{
		$query = User::with('roles', 'profile');

		$search = strtolower(Input::get('search'));

		if($search) {
			$query->where('first_name', 'like', '%' . $search . '%');
			$query->orWhere('last_name', 'like', '%' . $search . '%');
			$query->orWhereHas('profile', function($q) {
				$search = Input::get('search');
				$q->where('username', 'like', '%' . $search . '%');
			});
			$query->orWhereHas('roles', function($q) {
				$search = Input::get('search');
				$q->where('name', 'like', '%' . $search . '%');
			});
			$query->orWhereHas('roles', function($q) {
				$search = Input::get('search');
				$q->where('display_name', 'like', '%' . $search . '%');
			});
		}

		$users = $query->orderBy('updated_at')->paginate(16);

		return View::make('users.index')->with('users', $users);
	}

	/**
	 * Display the specified resource.
	 * GET /users/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$user = User::findOrFail($id);

		if (!$user) {
			App::abort(404);
		}

		return View::make('users.show')->with('user', $user);
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /users/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$user = User::findOrFail($id);

		if (!$user) {
			App::abort(404);
		}

		return View::make('users.edit')->with('user', $user);
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /users/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$user = User::findOrFail($id);

		if (!$user) {
			Log::info('Attempt to edit a non-user!');

			App::abort(404);
		}

		if ($user->id != Auth::id()) {
			Log::info('Attempt to edit account belonging to another user');

			App::abort(404);
		}

		return $this->validateAndSave($user);
	}

	public function validateAndSave($user)
	{
		try {
			$user->first_name = Input::get('first_name');
			$user->last_name  = Input::get('last_name');
			$user->email 	  = Input::get('email');
			$user->zip		  = Input::get('zip');

			$user->saveOrFail();

			Log::info('User Created Successfully');

			Log::info('Log Message', array('context', Input::all()));

			return Redirect::action('UsersController@show', array($user->id));

		} catch (Watson\Validating\ValidationException $e) {

			Session::flash('errorMessage',
				'Ohh no! Something went wrong. You should be seeing some errors down below.');

			Log::info('Validation failed', Input::all());

			Log::info($e->getErrors()->toArray());
			return Redirect::back()->withErrors($e->getErrors())->withInput();
		}
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /users/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$user = User::findOrFail($id);

		if (!$user) {
			Log::info('Attempt to delete a non-user from the database!');

			App::abort(404);
		}

		if ($user->id != Auth::id()) {
			Log::info('Attempt to delete another user by: ' . User::find($Auth::id()));

			App::abort(404);
		}

		$user->delete();

		return Redirect::action('UsersContoller@index');
	}

	public function role($id)
	{
		$user = User::find($id);

		$roles = Role::all();

		if (!$user) {
			App::abort(404);
		}

		return View::make('users.edit-roles')->with(array('user' => $user, 'roles' => $roles));
	}

	public function editRole($id)
	{
		$user = User::find($id);

		$roles = Input::get('roles');

		$user->roles()->sync($roles);

		Session::flash('successMessage', "Role successfully updated on $user->first_name's account.");

		return Redirect::action('UsersController@edit', array($user->id));
	}

}