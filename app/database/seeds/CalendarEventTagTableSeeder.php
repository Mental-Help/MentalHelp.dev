<?php


class CalendarEventTagTableSeeder extends Seeder {

	public function run()
	{
		foreach(CalendarEvent::all() as $event) {
			$tag = Tag::findOrFail(5);

			$event->tags()->attach($tag->id);
			$event->timestamps = false;
		}
	}

}