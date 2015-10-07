<?php

class CalendarEventsTableSeeder extends Seeder {

	public function run()
	{
		$event = new CalendarEvent();

		$event->title 		    = 'Depression Support Group';
		$event->description     = 'Come join us for the inaugural group therapy session hosted online over Google Hangouts.
									There will be an opportunity for everyone in attendance to speak, and we will follow
									up with another meeting on the first weekend of every month.
									Organized by Tarek S Hafez | Contact me at: thafez@ymail.com';

		$event->start_time		= '2015-09-05 12:00:00';
		$event->end_time		= '2015-09-05 01:00:00';

		$user = User::findOrFail(1);
		$event->user_id			= $user->id;

		$event->saveOrFail();

		$eventTwo = new CalendarEvent();

		$eventTwo->title 		    = 'Depression Support Group';
		$eventTwo->description      = 'Come join us for the second group therapy session hosted online over Google Hangouts.
									There will be an opportunity for everyone in attendance to speak, and we will follow
									up with another meeting on the first of every month.
									Organized by Tarek S Hafez | Contact me at: thafez@ymail.com';

		$eventTwo->start_time		= '2015-10-03 12:00:00';
		$eventTwo->end_time			= '2015-10-03 01:00:00';

		$user = User::findOrFail(1);
		$eventTwo->user_id			= $user->id;

		$eventTwo->saveOrFail();

		$eventThree = new CalendarEvent();

		$eventThree->title 		    = 'Depression Support Group';
		$eventThree->description    = 'Come join us for the second group therapy session hosted online over Google Hangouts.
									There will be an opportunity for everyone in attendance to speak, and we will follow
									up with another meeting on the first of every month.
									Organized by Tarek S Hafez | Contact me at: thafez@ymail.com';

		$eventThree->start_time		= '2015-11-07 12:00:00';
		$eventThree->end_time		= '2015-11-07 01:00:00';

		$user = User::findOrFail(1);
		$eventThree->user_id			= $user->id;

		$eventThree->saveOrFail();
	}

}