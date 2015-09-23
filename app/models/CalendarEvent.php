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
		'start_time'	  => 'required|date',
		'end_time'		  => 'required|date',
		'user_id'		  => 'required|numeric',
		'location_id'     => 'required|numeric',
	);

	public function rsvpUser()
	{
		return $this->belongsToMany('User', 'event_user', 'event_id', 'user_id');
	}
}