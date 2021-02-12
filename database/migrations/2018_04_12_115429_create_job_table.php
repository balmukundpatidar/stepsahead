<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateJobTable extends Migration {

	public function up()
	{
		Schema::create('job', function(Blueprint $table) {
			$table->increments('id');
			$table->string('job_title')->nullable();
			$table->text('job_description');
			$table->text('skills_requirement');
			$table->enum('job_status', array('Active', 'InActive'))->nullable();
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('job');
	}
}