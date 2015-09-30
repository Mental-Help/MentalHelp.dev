<?php


class CalendarEventTagTableSeeder extends Seeder {

	public function run()
	{
		$tags = [];

		foreach(CalendarEvent::all() as $event) {

			$tags = Tag::all()->random(2);

			foreach($tags as $tag) {
				$event->tags()->attach($tag->id);
				$event->timestamps = false;
			}
		}
	}

}