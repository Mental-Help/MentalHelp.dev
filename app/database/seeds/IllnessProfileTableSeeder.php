<?php


class IllnessProfileTableSeeder extends Seeder {

	public function run()
	{
		$illnesses = [];
		$randomSetOfIllnesses = mt_rand(1, 15);

		foreach	(Profile::all() as $profile) {
			$illnesses = array_keys(Illness::all()->random($randomSetOfIllnesses));

			$profile->illnesses()->sync($illnesses);
		}
	}

}