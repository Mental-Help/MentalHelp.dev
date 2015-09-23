<?php

	use \Esensi\Model\SoftModel;

class Tag extends \SoftModel {

	protected $table = 'tags';

	protected $fillable = [
		'tag'
	];

	protected $rules = array(
		'tags' => 'required|max:255'
	);

	public function userStorys()
	{
		return $this->belongsToMany('UserStory');
	}

	public function calendarEventsTags()
	{
		return $this->belongsToMany('CalendarEvent', 'event_tag', 'event_id', 'tag_id');
	}
}