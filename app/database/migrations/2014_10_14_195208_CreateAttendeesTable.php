<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAttendeesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('attendees', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name');
			$table->string('surname');
			$table->string('nickname');
			$table->string('email')->nullable();
			$table->string('tel')->nullable();
			$table->string('parent_tel');
			$table->smallInteger('class')->nullable()->unsigned();
			$table->string('school')->nullable();
			$table->string('facebook_url')->nullable();
			$table->string('transport')->nullable();
			$table->string('food_allergy')->nullable();
			$table->string('med_allergy')->nullable();
			$table->string('health_condition')->nullable();
			$table->string('expect')->nullable();
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
		Schema::drop('attendees');
	}

}
