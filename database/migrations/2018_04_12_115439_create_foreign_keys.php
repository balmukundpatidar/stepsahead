<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Eloquent\Model;

class CreateForeignKeys extends Migration {

	public function up()
	{
		Schema::table('employee_details', function(Blueprint $table) {
			$table->foreign('user_id')->references('id')->on('users')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('skills', function(Blueprint $table) {
			$table->foreign('user_id')->references('id')->on('users')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('job_employer', function(Blueprint $table) {
			$table->foreign('user_id')->references('id')->on('users')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('job_employer', function(Blueprint $table) {
			$table->foreign('job_id')->references('id')->on('job')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('job_employee', function(Blueprint $table) {
			$table->foreign('user_id')->references('id')->on('users')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('job_employee', function(Blueprint $table) {
			$table->foreign('job_id')->references('id')->on('job')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('employer_details', function(Blueprint $table) {
			$table->foreign('user_id')->references('id')->on('users')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
	}

	public function down()
	{
		Schema::table('employee_details', function(Blueprint $table) {
			$table->dropForeign('employee_details_user_id_foreign');
		});
		Schema::table('skills', function(Blueprint $table) {
			$table->dropForeign('skills_user_id_foreign');
		});
		Schema::table('job_employer', function(Blueprint $table) {
			$table->dropForeign('job_employer_user_id_foreign');
		});
		Schema::table('job_employer', function(Blueprint $table) {
			$table->dropForeign('job_employer_job_id_foreign');
		});
		Schema::table('job_employee', function(Blueprint $table) {
			$table->dropForeign('job_employee_user_id_foreign');
		});
		Schema::table('job_employee', function(Blueprint $table) {
			$table->dropForeign('job_employee_job_id_foreign');
		});
		Schema::table('employer_details', function(Blueprint $table) {
			$table->dropForeign('employer_details_user_id_foreign');
		});
	}
}