<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class UserStoriesTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

		foreach(Profile::all() as $profile) {
			for($i = 1; $i < 4; $i += 1) {
				$userStory = new UserStory();

				$userStory->title 	  = $faker->bs;
				$userStory->body  	  = $faker->realText(500, 5);
				if ($i % 2 == 0) {
					$userStory->is_public = false;
				} else {
					$userStory->is_public = true;
				}

				$userStory->profile_id = $profile->id;

				If (!$userStory->save()){
					$userStory->getErrors()->toArray();
				}
			}
		}


	}

}