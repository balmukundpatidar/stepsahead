<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateJobEmployerTable extends Migration {

	public function up()
	{
		Schema::create('job_employer', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('user_id')->unsigned();
			$table->integer('job_id')->unsigned();
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('job_employer');
	}
}