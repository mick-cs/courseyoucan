<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateLinksTable extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create('links', function (Blueprint $table) {
			$table->increments('id')->comment('自增唯一ID');
			$table->bigInteger('cid')->unsigned()->comment('分类ID');
			$table->string('name')->comment('链接名称');
			$table->string('url')->comment('链接地址');
			$table->string('icon')->comment('链接图标');
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
		Schema::drop('links');
	}
}
