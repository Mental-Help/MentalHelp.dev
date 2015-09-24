<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProfilesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('profiles', function(Blueprint $table)
		{
			$table->increments('id');

			$table->text('about_me');
			$table->string('username', 255)->unique();

			$table->boolean('is_public');

			$table->boolean('can_be_contacted');
			$table->string('public_email')->nullable()->unique();

			$table->string('image_url')->unique();
			$table->string('facebook_url')->nullable()->unique();
			$table->string('twitter_url')->nullable()->unique();
			$table->string('instagram_url')->nullable()->unique();

			$table->integer('user_id')->unsigned();
			$table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

			$table->softDeletes();
			$table->timestamps();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('profiles');
	}

}
