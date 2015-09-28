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

		$user->name 		= 'mental-health-client';
		$user->display_name = 'Mental Health Client Profile';
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

		$canBrowseProfiles = new Permission();

		$canBrowseProfiles->name         = 'can_browse_profiles';
		$canBrowseProfiles->display_name = 'Can Browse Profiles';

		$canBrowseProfiles->save();

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

		$canFlag = new Permission();

		$canFlag->name 		   = 'can_flag';
		$canFlag->display_name = 'Can Flag';
		$canFlag->description  = 'User can flag posts that may be inappropriate, or urgently needs attention. This will
			appear on an administration view, through a filtered search in the admin index.';

		$canFlag->save();

		$canEditOwnPosts = new Permission();

		$canEditOwnPosts->name		   = 'can_edit_own_posts';
		$canEditOwnPosts->display_name = 'Can Edit Own Posts';
		$canEditOwnPosts->description  = 'User can edit their own user stories.';

		$canEditOwnPosts->save();

		$canEditOwnProfile = new Permission();

		$canEditOwnProfile->name 		 = 'can_edit_own_profile';
		$canEditOwnProfile->display_name = 'Can Edit Own Profile';
		$canEditOwnProfile->description  = 'User can edit their own user profile';

		$canEditOwnProfile->save();

		$canEditAnothersPosts = new Permission();

		$canEditAnothersPosts->name		    = 'can_edit_another_users_posts';
		$canEditAnothersPosts->display_name = 'Can Edit Another Users Posts';
		$canEditAnothersPosts->description  = 'User is likely an Administrator and has the permission to edit/delete
			flagged posts created by other users.';
		$canEditAnothersPosts->save();

		$canEditAnothersProfile = new Permission();

		$canEditAnothersProfile->name         = 'can_edit_another_users_profile';
		$canEditAnothersProfile->display_name = 'Can Edit Another Users Profile';
		$canEditAnothersProfile->description  = 'User is likely an Administrator and has the permission to edit/delete
			flagged profiles created by other users.';

		$canEditAnothersProfile->save();

		$admin->attachPermissions(array(
			$canBrowseProfiles,
			$createDigitalGroups,
			$createPhysicalGroups,
			$canEditAnothersProfile,
			$canEditAnothersPosts,
			$canFlag,
			$canEditOwnProfile,
			$canEditOwnPosts
		));

		$user->attachPermissions(array(
			$canBrowseProfiles,
			$canEditOwnProfile,
			$canEditOwnPosts,
			$canFlag,
			$createDigitalGroups
		));

		$caregiver->attachPermissions(array(
			$canBrowseProfiles,
			$canEditOwnProfile,
			$canEditOwnPosts,
			$canFlag,
			$createDigitalGroups
		));

		$professional->attachPermissions(array(
			$canBrowseProfiles,
			$canEditOwnProfile,
			$canEditOwnPosts,
			$canFlag,
			$createDigitalGroups,
			$createPhysicalGroups
		));
	}

}