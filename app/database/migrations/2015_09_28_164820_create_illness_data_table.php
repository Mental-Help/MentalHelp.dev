<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateIllnessDataTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('illness_data', function(Blueprint $table)
		{
			$table->increments('id');

			$table->string('title');
			$table->text('description');
			$table->text('depth_description');
			$table->text('symptoms');
			$table->text('diagnosis');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('illness_data');
	}

}
