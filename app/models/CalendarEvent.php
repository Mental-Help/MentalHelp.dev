<?php

	use Esensi\Model\SoftModel;

class CalendarEvent extends SoftModel {
	protected $table = 'calendar_events';

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
		'location_id'     => 'required_if:can_be_physical,true|numeric',
	);

	public function attendees()
	{
		return $this->belongsToMany('User', 'event_user', 'event_id', 'user_id');
	}

	public function location()
	{
		return $this->hasOne('Location');
	}

	public function owner()
	{
		return $this->hasOne('User', 'users', 'user_id');
	}

	public function tags()
	{
		return $this->belongsToMany('Tag');
	}
}