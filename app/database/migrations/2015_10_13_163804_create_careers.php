<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCareers extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('careers', function(Blueprint $table)
		{
			$table->increments('id');
			$table->timestamps();

			# custom fields
			$table->string('name');
			$table->string('email');
			$table->string('qualification');
			$table->string('org_filename');
			$table->string('filename');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('careers');
	}

}
