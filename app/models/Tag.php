<?php

	use Esensi\Model\Model;

class Tag extends Model {

	protected $table = 'tags';

	protected $fillable = [
		'tag'
	];

	protected $rules = array(
		'tag' => 'required|max:255'
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