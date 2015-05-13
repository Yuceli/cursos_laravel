<?php

use Faker\Factory as Faker;

class WorkshopTableSeeder extends Seeder {

    public function run()
    {

    	$faker = Faker::create();

        DB::table('workshops')->delete();

        for ($i=0; $i < 50; $i++) { 
	        Workshop::create(
        		array(
        			'title'			=>	$faker->sentence($nbWords = 3),
					'description'	=>	$faker->sentence($nbWords = 15),
					'begin_date'	=>	$faker->dateTimeBetween($startDate = '-30 years', $endDate = 'now'),
					'end_date'		=>	$faker->dateTimeBetween($startDate = '-30 years', $endDate = 'now')
        		)
        	);
        }

    }

}

			