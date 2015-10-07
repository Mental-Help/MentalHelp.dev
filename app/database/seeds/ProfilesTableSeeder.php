<?php

class ProfilesTableSeeder extends Seeder {

	public function run()
	{
		foreach(User::all() as $user) {
			$profile = new Profile();

			$profile->about_me = '"We need never be hopeless, because we can never be irreparably broken." - John Green';

			$profile->is_public = true;
			$profile->can_be_contacted = false;

			// $profile->public_email  = 'email@email.com';

			$profile->image_url		= '/img/default_profile_img.jpeg';

			// $profile->facebook_url  = 'https://www.facebook.com';
			// $profile->twitter_url   = 'https://www.twitter.com';
			// $profile->instagram_url = 'https://www.instagram.com';

			$profile->user_id 		= $user->id;

			if (!$profile->save()) {
				dd($profile->getErrors()->toArray());
			}
		}
	}
}