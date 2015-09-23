<?php

	use Esensi\Model\SoftModel;

class CalendarEvent extends \SoftModel {
	protected $table = 'events';

	protected $fillable = [
		'can_be_physical',
		'title',
		'description',
		'start_time',
		'end_time',
		'user_id',
		'location_id'
	];

	protected $rules = array(
		'can_be_physical' => 'required|boolean',
		'title'			  => 'required|max:255',
		'description'	  => 'required|max:750',
		'start_time'	  => 'required|date_format:Y-m-d h:i:s',
		'end_time'		  => 'required|date_format:Y-m-d h:i:s',
		'user_id'		  => 'required|numeric',
		'location_id'     => 'required|numeric',
	);

	public function rsvpUser()
	{
		return $this->belongsToMany('User', 'event_user', 'event_id', 'user_id');
	}

	public function eventLocation()
	{
		return $this->hasOne('Location', 'locations', 'location_id');
	}

	public function eventOwner()
	{
		return $this->hasOne('User', 'users', 'user_id');
	}

	public function eventTags()
	{
		return $this->belongsToMany('Tag', 'event_tag', 'event_id', 'tag_id');
	}
}