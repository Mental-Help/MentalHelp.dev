<?php

class EntrustTableSeeder extends Seeder {

	public function run()
	{
		$admin = new Role();

		$admin->name 		 = 'administrator';
		$admin->display_name = 'User Administrator';
		$admin->description  = 'System Administrator';

		$admin->save();

		$user = new Role();

		$user->name 		= 'storytellers';
		$user->display_name = 'Storyteller';
		$user->description  = 'Type of user seeking assistance and potentially a support network on the site.';

		$user->save();

		$caregiver = new Role();

		$caregiver->name 		 = 'advocates';
		$caregiver->display_name = 'Advocate';
		$caregiver->description  = 'Type of user seeking to approach the site as a supporter of storytellers, and
			potentially be a storyteller of their own.';

		$caregiver->save();

		$createDigitalGroups = new Permission();

		$createDigitalGroups->name 		   = 'can_create_digital_groups';
		$createDigitalGroups->display_name = 'Can Create Digital Groups';
		$createDigitalGroups->description  = 'User is able to schedule digital conference support groups.
			New users are required to hold a minimum of two digital conference groups before they can schedule any in
			person sessions.';

		$createDigitalGroups->save();

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

		$canEditRoles = new Permission();

		$canEditRoles->name = 'can_edit_user_roles';
		$canEditRoles->display_name = 'Can Edit User Roles';
		$canEditRoles->description = 'User is likely an Administrator and has the permission to add or remove user
			roles.';

		$canEditRoles->save();

		$admin->attachPermissions(array(
			$createDigitalGroups,
			$canEditAnothersProfile,
			$canEditAnothersPosts,
			$canFlag,
			$canEditOwnProfile,
			$canEditOwnPosts,
			$canEditRoles
		));

		$user->attachPermissions(array(
			$canEditOwnProfile,
			$canEditOwnPosts,
			$canFlag,
			$createDigitalGroups
		));

		$caregiver->attachPermissions(array(
			$canEditOwnProfile,
			$canEditOwnPosts,
			$canFlag,
			$createDigitalGroups
		));

		$user = User::where('username', '=', 'Harkonnen')->first();
		$user->attachRole($admin);
		$user->attachRole($user);

		$seconduser = User::where('username', '=', 'Alex')->first();
		$seconduser->attachRole($admin);
		$seconduser->attachRole($user);

		$seconduser = User::where('username', '=', 'Meghan')->first();
		$seconduser->attachRole($admin);
		$seconduser->attachRole($advocate);

	}

}