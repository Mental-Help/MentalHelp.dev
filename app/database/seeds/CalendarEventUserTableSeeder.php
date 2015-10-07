<?php

class CalendarEventUserTableSeeder extends Seeder {

	public function run()
	{
		$attendees = [];

		foreach(CalendarEvent::all() as $event) {

			$attendees = User::all()->random(3);

			foreach($attendees as $attendee) {

				$event->attendees()->attach($attendee->id);
			}

		}
	}

}