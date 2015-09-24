<?php

	use Esensi\Model\Model;

class Illness extends Model {

	protected $table = 'illnesses';

	protected $fillable = [
		'illness'
	];

	protected $rules = array(
		'illness' => 'required|max:255'
	);

	public function profiles()
	{
		return $this->belongsToMany('Profile');
	}
}