<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUserStoriesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('user_stories', function(Blueprint $table)
		{
			$table->increments('id');

			$table->string('title');
			$table->text('body');
			$table->boolean('is_public');

			$table->integer('profile_id')->unsigned();
			$table->foreign('profile_id')->references('id')->on('profiles')->onDelete('cascade');

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
		Schema::drop('user_stories');
	}

}
