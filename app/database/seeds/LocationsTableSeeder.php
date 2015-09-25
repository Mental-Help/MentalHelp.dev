<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class LocationsTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

		for($i = 0; $i < 10; $i += 1) {
			$location = new Location();

			$location->street_address = $faker->streetAddress;
			$location->city 		  = $faker->city;
			$location->state 		  = $faker->stateAbbr;
			$location->zip 			  = 78201;

			$location->latitude 	  = $faker->latitude;
			$location->longitude	  = $faker->longitude;

			try {
				$location->saveOrFail();
			} catch (Exception $e) {
				dd($e->getErrors()->toArray());
			}
		}
	}

}