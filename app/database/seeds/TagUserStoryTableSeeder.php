<?php

class TagUserStoryTableSeeder extends Seeder {

	public function run()
	{
		foreach(UserStory::all() as $userStory) {

			$tag = Tag::findOrFail(5);

			$userStory->tags()->attach($tag->id);
		}
	}

}