<?php

	use Esensi\Model\SoftModel;

class Illness extends \SoftModel {

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