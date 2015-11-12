<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateOptionsTable extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create('options', function (Blueprint $table) {
			$table->increments('id')->comment('自增唯一ID');
			$table->string('name')->comment('选项名称');
			$table->text('value')->comment('选项值');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::drop('options');
	}
}
