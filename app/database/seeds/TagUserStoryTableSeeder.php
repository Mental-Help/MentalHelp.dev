<?php

class TagUserStoryTableSeeder extends Seeder {

	public function run()
	{
		$tags = [];

		foreach(UserStory::all() as $userStory) {

			$tags = Tag::all()->random(2);

			foreach($tags as $tag) {
				$userStory->tags()->attach($tag->id);
			}
		}
	}

}