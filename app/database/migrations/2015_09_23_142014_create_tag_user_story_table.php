<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTagUserStoryTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tag_user_story', function(Blueprint $table)
		{
			$table->integer('tag_id')->unsigned();
			$table->foreign('tag_id')->references('id')->on('tags');
			$table->integer('user_story_id')->unsigned();
			$table->foreign('user_story_id')->references('id')->on('user_stories')->onDelete('cascade');
			$table->primary(['tag_id', 'user_story_id']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tag_user_story');
	}

}
