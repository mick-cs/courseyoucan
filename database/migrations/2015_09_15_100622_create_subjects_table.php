<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSubjectsTable extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create('subjects', function (Blueprint $table) {
			$table->increments('id')->comment('自增唯一ID');
			$table->string('name')->comment('课程名称');
			$table->string('summary')->comment('课程简介');
			$table->text('description')->comment('课程介绍');
			$table->string('cover')->comment('课程封面');
			$table->string('star', 10)->comment('课程评星');
			$table->timestamps();
			$table->softDeletes();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::drop('subjects');
	}
}
