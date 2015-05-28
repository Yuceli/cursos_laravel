<?php
class WorkshopTableSeeder extends Seeder
{

public function run()
{
    DB::table('workshops')->delete();
    for ($i=1; $i <= 50; $i++) { 
    	Workshop::create(array(
        	'title'     => "Curso $i",
        	'description' => "Este es un curso, el número es $i",
    	));
    }
}

}

			