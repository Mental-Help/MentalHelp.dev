<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		DB::table('illnesses')->delete();

		DB::table('profiles')->delete();

		DB::table('users')->delete();

		$this->call('UsersTableSeeder');

		$this->call('ProfilesTableSeeder');

		$this->call('IllnessesTableSeeder');
	}

}
