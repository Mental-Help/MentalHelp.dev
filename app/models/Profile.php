<?php

	use Esensi\Model\SoftModel;

class Profile extends SoftModel {

	protected $table = 'profiles';

	protected $fillable = [
		'about_me',
		'username',
		'is_public',
		'can_be_contacted',
		'public_email',
		'image_url',
		'facebook_url',
		'twitter_url',
		'instagram_url',
		'user_id'
	];

	protected $rules = array(
		'about_me' 		   => 'max:500',
		'is_public'		   => 'required|boolean',
		'can_be_contacted' => 'required|boolean',
		'public_email'	   => 'required_if:can_be_contacted,true|email|max:255|unique:profiles',
		'image_url'		   => 'mime:jpeg,jpg,png:max:255|unique:profiles',
		'facebook_url'	   => 'url|max:255|unique:profiles',
		'twitter_url'	   => 'url|max:255|unique:profiles',
		'instagram_url'	   => 'url|max:255|unique:profiles',
		'user_id'		   => 'required|numeric|unique:profiles'
	);

	public function user()
	{
		return $this->belongsTo('User');
	}

	public function illnesses()
	{
		return $this->belongsToMany('Illness');
	}

	public function userStories()
	{
		return $this->hasMany('UserStory');
	}

	public function uploadImage($file)
	{
		$name = $file->getClientOriginalName();

		$path = '/uploadedimgs/';

		$file->move(public_path() . $path, $name);

		$this->image_url = $path . $name;
	}
}