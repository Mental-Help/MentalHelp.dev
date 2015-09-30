<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class UsersTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

		for($i = 0; $i < 50; $i += 1)
		{
			$user = new User();
			$user->remain_anonymous		 = false;
			$user->email                 = $faker->safeEmail;
			$user->username				 = $faker->unique()->userName;
			$user->first_name            = $faker->firstName;
			$user->last_name             = $faker->lastName;
			$password                    = "password$i";
			$user->password              = $password;
			$user->password_confirmation = $password;
			$user->confirmation_code	 = md5(uniqid(mt_rand(), true));
			$user->confirmed			 = 1;

			if ($user->isValid()) {
				$user->save();
			} else {
				echo $user->getErrors()->toArray();
			}
		}
	}

}