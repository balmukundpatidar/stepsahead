<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSliderTable extends Migration {

	public function up()
	{
		Schema::create('slider', function(Blueprint $table) {
			$table->increments('id');
			$table->string('slider_title')->nullable();
			$table->string('slider_desc')->nullable();
			$table->string('slider_image', 190)->nullable();
			$table->enum('slider_status', array('Active', 'InActive'));
			$table->integer('slider_position');
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('slider');
	}
}