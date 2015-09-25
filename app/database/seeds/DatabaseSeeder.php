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

		DB::table('illness_profile')->delete();

		DB::table('illnesses')->delete();

		DB::table('profiles')->delete();

		DB::table('permissions')->delete();

		DB::table('roles')->delete();

		DB::table('users')->delete();

		$this->call('UsersTableSeeder');

		$this->call('EntrustTableSeeder');

		$this->call('ProfilesTableSeeder');

		$this->call('IllnessesTableSeeder');

		$this->call('IllnessProfileTableSeeder');
	}

}
