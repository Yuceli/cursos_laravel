<?php

use Faker\Factory as Faker;

class UserTableSeeder extends Seeder {

    public function run()
    {

    	$faker = Faker::create();

        DB::table('users')->delete();

        for ($i=0; $i < 100; $i++) { 
        	User::create(
	        	array(
	        		'name'		=> 	$faker->firstName,
					'nickname'	=>  $faker->userName,
					'password'	=>	$faker->password,
					'role'		=>	$faker->randomElement($array = array ('admin','user')),
					'email'		=>	$faker->email,
					'level'		=>	$faker->numberBetween(1,3)
	        	)
        	);
        }
    }

}

			