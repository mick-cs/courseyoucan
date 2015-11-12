<?php

namespace App\Http\Controllers\Admin;

use App\Categorie;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class AdminController extends Controller {

	public function __construct() {
		$this->middleware('auth');
	}

	/**
	 * dashboard
	 *
	 * @return Response
	 */
	public function getDashboard() {

		return view('admin.dashboard');
	}

	/**
	 * Article List
	 * @return [type] [description]
	 */
	public function getArticles($status) {
		return view('admin.articles', ['status' => $status]);
	}

	/**
	 * Add new article
	 * @return [type] [description]
	 */
	public function getArticleNew() {
		return view('admin.article-new');
	}

	/**
	 * Category Management
	 * @return [type] [description]
	 */
	public function getCategory(Request $request, Response $response) {
		$categories = Categorie::find(1);
		// var_dump($categories);die;
		return view('admin.category');
	}

	/**
	 * Pages Management
	 * @return [type] [description]
	 */
	public function getPages($status) {
		return view('admin.pages', ['status' => $status]);
	}

	/**
	 * Pages Management
	 * @return [type] [description]
	 */
	public function getAddNewPage() {
		return view('admin.add-new-page');
	}

}
