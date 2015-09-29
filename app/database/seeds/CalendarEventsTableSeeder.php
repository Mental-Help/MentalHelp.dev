<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class CalendarEventsTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

		// foreach(Location::all() as $location) {
		// 	$event = new CalendarEvent();

		// 	$event->title 		    = $faker->bs;
		// 	$event->description     = $faker->realText(500, 5);
		// 	$event->can_be_physical = true;

		// 	$event->start_time		= '2015-09-28 12:00:00';
		// 	$event->end_time		= '2015-09-28 01:00:00';

		// 	$event->location_id     = $location->id;
		// 	$user = User::all()->random();
		// 	$event->user_id			= $user->id;

		// 	$event->saveOrFail();
		// }

		foreach(CalendarEvent::all() as $physicalEvent) {
			$firstDigitalEvent = new CalendarEvent();

			$firstDigitalEvent->title 			= $faker->unique()->bs;
			$firstDigitalEvent->description 	= $faker->unique()->realText(500, 5);
			$firstDigitalEvent->can_be_physical = false;

			$firstDigitalEvent->start_time		= '2015-09-01 12:00:00';
			$firstDigitalEvent->end_time		= '2015-09-01 01:00:00';

			$firstDigitalEvent->user_id 		= $physicalEvent->user_id;

			$firstDigitalEvent->saveOrFail();

			$secondDigitalEvent = new CalendarEvent();

			$secondDigitalEvent->title 			 = $faker->unique()->bs;
			$secondDigitalEvent->description 	 = $faker->unique()->realText(500, 5);
			$secondDigitalEvent->can_be_physical = false;


			$secondDigitalEvent->start_time		 = '2015-09-14 12:00:00';
			$secondDigitalEvent->end_time		 = '2015-09-14 01:00:00';

			$secondDigitalEvent->user_id 		 = $physicalEvent->user_id;

			$secondDigitalEvent->saveOrFail();
		}
	}

}