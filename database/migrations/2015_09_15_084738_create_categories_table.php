<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCategoriesTable extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create('categories', function (Blueprint $table) {
			$table->increments('id')->comment('自增唯一ID');
			$table->bigInteger('pid')->unsigned()->comment('父级ID');
			$table->string('name')->comment('目录名称');
			$table->string('slug')->comment('别名')->unique();
			$table->string('type')->default('post')->comment('分类类型(post, link)');
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
		Schema::drop('categories');
	}
}
