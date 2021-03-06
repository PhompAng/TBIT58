<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAttendingTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('attending', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('attendee_id')->unsigned()->unique();
			$table->foreign('attendee_id')->references('id')->on('attendees')->onDelete('cascade');
			$table->boolean('day_1_check')->default(False);
			$table->boolean('day_2_check')->default(False);
			$table->boolean('day_3_check')->default(False);
			$table->boolean('day_4_check')->default(False);
			$table->boolean('day_5_check')->default(False);
			$table->boolean('day_6_check')->default(False);
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('attending');
	}

}
