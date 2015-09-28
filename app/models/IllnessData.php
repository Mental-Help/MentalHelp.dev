<?php

	use Esensi\Model\SoftModel;

class IllnessData extends SoftModel {
	protected $table = 'illness_data';

	protected $fillable = [
		'title',
		'description',
		'depth_description',
		'symptoms',
		'diagnosis'
	];

	protected $rules = [
		'title' 			=> 'required',
		'description' 		=> 'required',
		'depth_description' => 'required',
		'symptoms'			=> 'required',
		'diagnosis'			=> 'required'
	];
}