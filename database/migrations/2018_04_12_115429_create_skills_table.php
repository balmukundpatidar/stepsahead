<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSkillsTable extends Migration {

	public function up()
	{
		Schema::create('skills', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('user_id')->unsigned();
			$table->text('skills_name');
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('skills');
	}
}