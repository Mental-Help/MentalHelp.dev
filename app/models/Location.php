<?php

	use Esensi\Model\SoftModel;

class Location extends \SoftModel {

	protected $table = 'locations';

	protected $fillable = [
		'street_address',
		'city',
		'state',
		'zip',
		'latitude',
		'longitude'
	];

	protected $rules = array(
		'street_address' => 'required|max:255',
		'city'			 => 'required|max:255',
		'state'			 => 'required',
		'zip'			 => 'required|numeric',
		'latitude'		 => 'required|numeric',
		'longitude' 	 => 'required|numeric'
	);

	public function calendarEvents()
	{
		return $this->belongsTo('CalendarEvent');
	}
}