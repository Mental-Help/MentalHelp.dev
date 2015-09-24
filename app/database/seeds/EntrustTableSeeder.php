<?php

class EntrustTableSeeder extends Seeder {

	public function run()
	{
		$admin = new Role();

		$admin->name 		 = 'admin';
		$admin->display_name = 'User Administrator';
		$admin->description  = 'System Administrator';

		$admin->save();

		$user = new Role();

		$user->name 		= 'help-seekers';
		$user->display_name = 'Help-Seeker User Profile';
		$user->description  = 'Basic User Profile';

		$user->save();

		$caregiver = new Role();

		$caregiver->name 		 = 'care-giver';
		$caregiver->display_name = 'Caregiver User Profile';
		$caregiver->description  = 'Secondary User Profile';

		$caregiver->save();

		$professional = new Role();

		$professional->name 		= 'professional';
		$professional->display_name = 'Professional User Profile';
		$professional->description  = 'Tertiary User Profile';

		$professional->save();

		$viewProfiles = new Permission();

		$viewProfiles->name         = 'can_browse_profiles';
		$viewProfiles->display_name = 'Can Browse Profiles';

		$viewProfiles->save();

		$createDigitalGroups = new Permission();

		$createDigitalGroups->name 		   = 'can_create_digital_groups';
		$createDigitalGroups->display_name = 'Can Create Digital Groups';
		$createDigitalGroups->description  = 'User is able to schedule digital conference support groups.
			New users are required to hold a minimum of two digital conference groups before they can schedule any in
			person sessions.';

		$createDigitalGroups->save();

		$createPhysicalGroups = new Permission();

		$createPhysicalGroups->name 		= 'can_create_physical_groups';
		$createPhysicalGroups->display_name = 'Can Create Physical Groups';
		$createPhysicalGroups->description  = 'User is able to schedule physical conference support groups.
			This permission is held innately by those with the Professionals Role, and to those users who have
			successfully held at least two digital conference support groups.';

		$createPhysicalGroups->save();

		




	}

}