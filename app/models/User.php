<?php

use Esensi\Model\SoftModel;
use Zizaco\Confide\ConfideUser;
use Zizaco\Confide\ConfideUserInterface;
use Bbatsche\Entrust\Contracts\EntrustUserInterface;
use Bbatsche\Entrust\Traits\EntrustUserTrait;

class User extends SoftModel implements ConfideUserInterface, EntrustUserInterface {

	use ConfideUser, EntrustUserTrait;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password', 'remember_token');

	protected $rules = array(
		'email' 	 => 'required|email|max:255|unique:users',
		'username'   => 'required|max:255|unique:users',
		'first_name' => 'max:255',
		'last_name'  => 'max:255',
		'password' 	 => 'required|confirmed'
	);

	protected $hashable = [ 'password' ];

	public function profile()
	{
		return $this->hasOne('Profile');
	}

	public function eventsAttending()
	{
		return $this->belongsToMany('CalendarEvent', 'event_user', 'user_id', 'event_id');
	}

	public function eventsCreated()
	{
		return $this->belongsTo('CalendarEvent', 'events', 'user_id');
	}
}
