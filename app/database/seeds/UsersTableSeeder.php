<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class UsersTableSeeder extends Seeder {

	public function run()
	{
		$user = new User();
		$user->remain_anonymous		 = false;
		$user->email                 = 'thafez@ymail.com';
		$user->username				 = 'Harkonnen';
		$user->first_name            = 'Tarek';
		$user->last_name             = 'Hafez';
		$password                    = 'password';
		$user->password              = $password;
		$user->password_confirmation = $password;
		$user->confirmation_code	 = md5(uniqid(mt_rand(), true));
		$user->confirmed			 = 1;

		if ($user->isValid()) {
			$user->save();
		} else {
			echo $user->getErrors()->toArray();
		}

		$user = new User();
		$user->remain_anonymous		 = false;
		$user->email                 = 'agutie95@yahoo.com';
		$user->username				 = 'Alex';
		$user->first_name            = 'Alexandra';
		$user->last_name             = 'Gutierrez';
		$password                    = 'password1';
		$user->password              = $password;
		$user->password_confirmation = $password;
		$user->confirmation_code	 = md5(uniqid(mt_rand(), true));
		$user->confirmed			 = 1;

		if ($user->isValid()) {
			$user->save();
		} else {
			echo $user->getErrors()->toArray();
		}

		$user = new User();
		$user->remain_anonymous		 = false;
		$user->email                 = 'meghanahrens17@yahoo.com';
		$user->username				 = 'Meghan';
		$user->first_name            = 'Meghan';
		$user->last_name             = 'Ahrens';
		$password                    = 'password2';
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