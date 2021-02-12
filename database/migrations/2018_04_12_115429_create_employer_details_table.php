<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEmployerDetailsTable extends Migration {

	public function up()
	{
		Schema::create('employer_details', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('user_id')->unsigned();
			$table->string('mobile')->nullable();
			$table->string('user_image')->nullable();
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('employer_details');
	}
}