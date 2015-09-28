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

		DB::table('illness_data')->delete();

		DB::table('calendar_event_user')->delete();

		DB::table('calendar_event_tag')->delete();

		DB::table('calendar_events')->delete();

		DB::table('locations')->delete();

		DB::table('tag_user_story')->delete();

		DB::table('tags')->delete();

		DB::table('user_stories')->delete();

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

		$this->call('UserStoriesTableSeeder');

		$this->call('TagsTableSeeder');

		$this->call('TagUserStoryTableSeeder');

		$this->call('LocationsTableSeeder');

		$this->call('CalendarEventsTableSeeder');

		$this->call('CalendarEventTagTableSeeder');

		$this->call('CalendarEventUserTableSeeder');

		$this->call('IllnessDataTableSeeder');
	}

}
