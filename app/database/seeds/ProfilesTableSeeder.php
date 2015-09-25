<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class ProfilesTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

		for($i = 1; $i < 51; $i += 1) {
			$profile = new Profile();

			$profile->about_me = $faker->realText(200);
			$profile->username = $faker->userName;

			if ($i % 2 == 0) {
				$profile->is_public = true;
				$profile->can_be_contacted = true;
			} else {
				$profile->is_public = false;
				$profile->can_be_contacted = false;
			}

			$profile->public_email  = $faker->safeEmail;

			$profile->image_url     = $faker->imageUrl();
			$profile->facebook_url  = $faker->url;
			$profile->twitter_url   = $faker->url;
			$profile->instagram_url = $faker->url;

			$profile->user_id 		= $i;

			$profile->save();
		}
	}

}