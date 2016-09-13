<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContactus extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('contactus', function(Blueprint $table)
		{
			# default fields
			$table->increments('id');
			$table->timestamps();

			# custom fields
			$table->string('name');
			$table->string('email');
			$table->string('subject');
			$table->text('message');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('contactus');
	}

}
