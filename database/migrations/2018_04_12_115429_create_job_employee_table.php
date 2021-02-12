<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateJobEmployeeTable extends Migration {

	public function up()
	{
		Schema::create('job_employee', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('user_id')->unsigned();
			$table->integer('job_id')->unsigned();
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('job_employee');
	}
}