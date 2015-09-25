<?php


class IllnessProfileTableSeeder extends Seeder {

	public function run()
	{
		$illnesses = [];

		foreach	(Profile::all() as $profile) {

			$randomSetOfIllnesses = mt_rand(2, 15);

			$illnesses = Illness::all()->random($randomSetOfIllnesses);
			foreach($illnesses as $illness) {
				$profile->illnesses()->attach($illness->id);
			}
		}
	}

}