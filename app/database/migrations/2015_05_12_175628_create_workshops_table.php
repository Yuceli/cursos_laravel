<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWorkshopsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('workshops', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('title', 255);
			$table->string('description', 255);
			$table->date('begin_date');
			$table->date('end_date');
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
		Schema::drop('workshops');
	}

}
