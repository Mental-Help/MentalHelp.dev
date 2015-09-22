<?php

	use \Esensi\Model\SoftModel;

class UserStory extends \SoftModel {
	protected $table = 'user_stories';

	protected $fillable = [
		'title',
		'body',
		'public',
		'profile_id'
	];

	protected $rules = array(
		'title' => 'required|max:255',
		'body'	=> 'required',
		''
	);
}