<?php

	use Esensi\Model\SoftModel;

class CalendarEvent extends SoftModel {
	protected $table = 'calendar_events';

	protected $fillable = [
		'title',
		'description',
		'start_time',
		'end_time',
		'user_id',
	];

	protected $rules = array(
		'title'			  => 'required|max:255',
		'description'	  => 'required|max:750',
		'start_time'	  => 'required|date_format:Y-m-d h:i:s',
		'end_time'		  => 'required|date_format:Y-m-d h:i:s',
		'user_id'		  => 'required|numeric'
	);

	public function attendees()
	{
		return $this->belongsToMany('User', 'calendar_event_user', 'calendar_event_id', 'user_id');
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