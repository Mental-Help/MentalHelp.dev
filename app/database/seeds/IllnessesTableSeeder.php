<?php

class IllnessesTableSeeder extends Seeder {

	public function run()
	{
		foreach(array_keys(Config::get('illnesses')) as $key => $longFormIllness) {
			$newIllness	= new Illness();

			$newIllness->timestamps = false;
			$newIllness->illness 	= $longFormIllness;

			$newIllness->save();
		}
	}

}