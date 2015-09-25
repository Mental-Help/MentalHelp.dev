<?php

class TagsTableSeeder extends Seeder {

	public function run()
	{
		foreach(Config::get('illnesses') as $illness){
			$tag = new Tag();

			$tag->timestamps = false;
			$tag->tag 		 = $illness;

			$tag->save();
		}
	}

}