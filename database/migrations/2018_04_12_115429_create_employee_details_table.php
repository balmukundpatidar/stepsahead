<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEmployeeDetailsTable extends Migration {

	public function up()
	{
		Schema::create('employee_details', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('user_id')->unsigned();
			$table->string('location', 190)->index();
			$table->string('mobile', 25);
			$table->string('exprience', 50);
			$table->string('position', 190);
			$table->string('company_name', 190);
			$table->string('qualification')->nullable();
			$table->string('resume')->nullable();
			$table->string('user_image');
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('employee_details');
	}
}