<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model {
	use SoftDeletes;
	protected $dates = ['deleted_at'];

	protected $table = 'categories';

	protected $fillable = ['pid', 'name', 'slug', 'type'];

	public function posts() {
		return $this->hasMany('App\Post', 'cid', 'id');
	}

	protected static function boot() {
		parent::boot();

		static::deleting(function ($category) {
			$category->posts()->delete();
		});

		static::restoring(function ($category) {
			$category->posts()->withTrashed()->restore();
		});
	}
}
