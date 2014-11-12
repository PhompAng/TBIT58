<?php

class AttendeeTableSeeder extends Seeder {

  public function run()
  {
 		$faker = Faker\Factory::create();
 
		for ($i = 0; $i < 100; $i++)
		{
		  $attendee = Attendee::create(array(
				'name'             => $faker->firstName,
				'surname'          => $faker->lastName,
				'nickname'         => $faker->firstName,
				'email'            => $faker->email,
				'tel'              => $faker->phoneNumber,
				'parent_tel'       => $faker->phoneNumber,
				'class'            => $faker->numberBetween($min = 1, $max = 6),
				'school'           => $faker->company,
				'facebook_url'     => $faker->url,
				'trip'             => "plane",
				'return_trip'      => NULL,
				'food_allergy'     => NULL,
				'med_allergy'      => NULL,
				'health_condition' => NULL,
				'expect'					 => NULL
		  ));
		}


		$attendee = Attendee::create(array(
				'name'             => $faker->firstName,
				'surname'          => $faker->lastName,
				'nickname'         => $faker->firstName,
				'email'            => $faker->email,
				'tel'              => $faker->phoneNumber,
				'parent_tel'       => $faker->phoneNumber,
				'class'            => $faker->numberBetween($min = 1, $max = 6),
				'school'           => $faker->company,
				'facebook_url'     => $faker->url,
				'trip'             => "Test",
				'return_trip'      => "Test",
				'food_allergy'     => "Test",
				'med_allergy'      => "Test",
				'health_condition' => "Test",
				'expect'					 => "Test"
		  ));
		$attendee = Attendee::create(array(
				'name'             => $faker->firstName,
				'surname'          => $faker->lastName,
				'nickname'         => $faker->firstName,
				'email'            => $faker->email,
				'tel'              => $faker->phoneNumber,
				'parent_tel'       => $faker->phoneNumber,
				'class'            => $faker->numberBetween($min = 1, $max = 6),
				'school'           => $faker->company,
				'facebook_url'     => $faker->url,
				'trip'             => "Test",
				'return_trip'      => "Test",
				'food_allergy'     => NULL,
				'med_allergy'      => "Test",
				'health_condition' => "Test",
				'expect'					 => "Test"
		  ));
		$attendee = Attendee::create(array(
				'name'             => $faker->firstName,
				'surname'          => $faker->lastName,
				'nickname'         => $faker->firstName,
				'email'            => $faker->email,
				'tel'              => $faker->phoneNumber,
				'parent_tel'       => $faker->phoneNumber,
				'class'            => $faker->numberBetween($min = 1, $max = 6),
				'school'           => $faker->company,
				'facebook_url'     => $faker->url,
				'trip'             => "Test",
				'return_trip'      => "Test",
				'food_allergy'     => "Test",
				'med_allergy'      => "Test",
				'health_condition' => NULL,
				'expect'					 => "Test"
		  ));

  }

}