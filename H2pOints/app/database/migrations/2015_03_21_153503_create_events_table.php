<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('events', function(Blueprint $table)
		{
            $table->increments('id')->unique();
            $table->string('name')->unique();
            $table->string('description');
            $table->dateTime('startDate');
            $table->integer('points');
            $table->double('pointsPrice');
            $table->double('moneyPrice');
            $table->string('place');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('events', function(Blueprint $table)
		{
			$table->drop();
		});
	}

}
