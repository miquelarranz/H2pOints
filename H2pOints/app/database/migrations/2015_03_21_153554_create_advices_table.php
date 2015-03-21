<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdvicesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('advices', function(Blueprint $table)
		{
            $table->increments('id')->unique();
            $table->string('title');
            $table->string('description');
            $table->string('image');
            $table->integer('points');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('advices', function(Blueprint $table)
		{
			$table->drop();
		});
	}

}
