<?php

	use Esensi\Model\SoftModel;

class Profile extends \SoftModel {

	protected $table = 'profiles';

	protected $fillable = [
		'about_me',
		'username',
		'can_be_contacted',
		'public_email'
	];

	protected $rules = array(
		'about_me' 		   => 'required|max:500',
		'username' 		   => 'required|max:255',
		'can_be_contacted' => 'required|boolean',
		'public_email'	   => 'required_if:can_be_contacted,true|email|max:255|unique:profiles'
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
}