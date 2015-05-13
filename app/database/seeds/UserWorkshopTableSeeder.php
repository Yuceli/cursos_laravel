<?php

use Faker\Factory as Faker;

class UserWorkshopTableSeeder extends Seeder {

    public function run()
    {

    	$faker = Faker::create();

        DB::table('user_workshop')->delete();

        for ($i=0; $i < 1000; $i++) { 
        	UserWorkshop::create(
	        	array(
                    'user_id'       => $faker->numberBetween(1,100),
	        		'workshop_id'   => $faker->numberBetween(1,50)
	        	)
        	);
        }
    }

}