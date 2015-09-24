<?php

class EntrustTableSeeder extends Seeder {

	public function run()
	{
		$admin = new Role();

		$admin->name 		 = 'admin';
		$admin->display_name = 'User Administrator';
		$admin->description  = '';

		$admin->save();

		$user = new Role();

		$user->name 		= 'help-seekers';
		$user->display_name = 'Help-Seeker User Profile';
		$user->description  = '';

		$user->save();

		$caregiver = new Role();

		$caregiver->name 		 = 'caregiver';
		$caregiver->display_name = 'Caregiver User Profile';
		$caregiver->description  = '';

		$caregiver->save();

		$professional = new Role();

		$professional->name 		= 'professional';
		$professional->display_name = 'Professional User Profile';
		$professional->description  = '';

		$professional->save();

		$

	}

}