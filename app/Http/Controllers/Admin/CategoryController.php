<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CategoryCreateRequest;
use Illuminate\Http\Request;

class CategoryController extends Controller {
	public function __construct() {
		$this->middleware('auth');
	}
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index(Category $category) {
		$categories = $category->all();
		// dd($categories);
		return view('admin.category', ['categories' => $categories, 'op' => 'add', 'category' => null]);
	}

	/**
	 * get category array
	 */
	public function getCatagoryChain(Category $category) {
		$categories = $category->all();
		$cc = array();
		foreach ($categories as $index => $item) {
			var_dump($item);
		}
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  Request  $request
	 * @return Response
	 */
	public function store(CategoryCreateRequest $request, Category $category) {

		if (!$category['id']) {
			$category->create($request->all());
		} else {
			$category->fill($request->all())->save();
			$category->save();
		}
		return redirect('admin/category');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show(Category $category) {
		$categories = $category->all();
		return view('admin.category', ['categories' => $categories, 'op' => 'show', 'category' => $category]);
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit(Category $category) {
		$categories = $category->all();
		return view('admin.category', ['categories' => $categories, 'op' => 'edit', 'category' => $category]);
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy(Category $category) {
		$category->delete();
		// dd($category);
		return redirect('admin/category');
	}
}
