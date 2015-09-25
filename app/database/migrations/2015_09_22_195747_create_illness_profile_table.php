<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateIllnessProfileTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('illness_profile', function(Blueprint $table)
		{
			$table->integer('illness_id')->unsigned();
			$table->foreign('illness_id')->references('id')->on('illnesses');
			$table->integer('profile_id')->unsigned();
			$table->foreign('profile_id')->references('id')->on('profiles')->onDelete('cascade');
			$table->primary(['illness_id', 'profile_id']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('illness_profile');
	}

}
