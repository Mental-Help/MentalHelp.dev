<?php

	use Esensi\Model\SoftModel;

class UserStory extends SoftModel {
	protected $table = 'user_stories';

	protected $fillable = [
		'title',
		'body',
		'is_public',
		'profile_id'
	];

	protected $rules = array(
		'title' 	 => 'required|max:255',
		'body'		 => 'required',
		'is_public'  => 'required|boolean',
		'profile_id' => 'required|numeric'
	);

	public function profile()
	{
		return $this->belongsTo('Profile');
	}


	public function tags()
	{
		return $this->belongsToMany('Tag');
	}
}