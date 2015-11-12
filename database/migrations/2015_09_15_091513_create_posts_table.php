<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePostsTable extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create('posts', function (Blueprint $table) {
			$table->increments('id')->comment('自增唯一ID');
			$table->bigInteger('cid')->unsigned()->comment('分类ID');
			$table->string('author')->comment('对应作者ID');
			$table->text('title')->comment('标题');
			$table->text('cover')->comment('文字封面图片');
			$table->longText('content')->comment('正文');
			$table->string('link', 200)->comment('文章固定链接');
			$table->string('keywords')->nullable()->comment('文章SEO关键字');
			$table->text('description')->nullable()->comment('文章SEO描述');
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
		Schema::drop('posts');
	}
}
