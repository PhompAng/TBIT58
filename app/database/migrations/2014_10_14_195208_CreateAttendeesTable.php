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
			$table->string('prefix');
			$table->string('name');
			$table->string('surname');
			$table->string('nickname')->nullable();
			$table->smallInteger('gender')->unsigned();
			$table->string('email');
			$table->string('tel')->nullable();
			$table->string('parent_tel');
			$table->smallInteger('class')->nullable()->unsigned();
			$table->string('school')->nullable();
			$table->string('facebook_url')->nullable();
			$table->smallInteger('trip')->nullable()->unsigned();
			$table->smallInteger('return_trip')->nullable()->unsigned();
			$table->string('food_allergy')->nullable();
			$table->string('med_allergy')->nullable();
			$table->string('health_condition')->nullable();
			$table->string('expect')->nullable();
			$table->boolean('direct_ent');
			$table->boolean('day_1')->default(False);
			$table->boolean('day_2')->default(False);
			$table->boolean('day_3')->default(False);
			$table->boolean('day_4')->default(False);
			$table->boolean('day_5')->default(False);
			$table->boolean('day_6')->default(False);
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
