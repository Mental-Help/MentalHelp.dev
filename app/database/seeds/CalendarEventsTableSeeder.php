<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class CalendarEventsTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

		for($i = 0; $i < 30; $i += 1) {
			$event = new CalendarEvent();

			$event->title 		    = $faker->bs;
			$event->description     = $faker->realText(500, 5);

			$event->start_time		= '2015-09-28 12:00:00';
			$event->end_time		= '2015-09-28 01:00:00';

			$user = User::all()->random();
			$event->user_id			= $user->id;

			$event->saveOrFail();
		}
	}

}