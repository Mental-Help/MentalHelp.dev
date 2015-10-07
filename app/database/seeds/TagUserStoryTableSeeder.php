<?php

class TagUserStoryTableSeeder extends Seeder {

	public function run()
	{
		foreach(UserStory::all() as $userStory) {

			$tags = Tag::findOrFail(5);

			foreach($tags as $tag) {
				$userStory->tags()->attach($tag->id);
			}
		}
	}

}