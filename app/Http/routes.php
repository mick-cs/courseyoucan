<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
 */

$router->get('/', function () {
	return view('welcome');
});

$router->get('admin', function () {
	return redirect('admin/dashboard');
});

$router->group(['namespace' => 'Admin', 'prefix' => 'admin'], function ($router) {
	$router->get('login', 'UserController@getLogin');
	$router->post('login', 'UserController@postLogin');
});

$router->group(['before' => 'auth', 'namespace' => 'Admin', 'prefix' => 'admin'], function ($router) {
	$router->get('logout', 'UserController@getLogout');
	$router->get('dashboard', 'AdminController@getDashboard');
	// Articles
	$router->get('articles/{status}', 'AdminController@getArticles');
	$router->get('article-new', 'AdminController@getArticleNew');
	// $router->get('category', 'AdminController@getCategory');

	// Pages
	$router->get('pages/{status}', 'AdminController@getPages');
	$router->get('add-new-page', 'AdminController@getAddNewPage');

	$router->get('users', 'CategoryController@create');
});

$router->bind('category', function ($id) {
	return App\Category::whereId($id)->first();
});
$router->bind('article', function ($id) {
	return App\Article::whereId($id)->first();
});
$router->group(['namespace' => 'Admin', 'prefix' => 'admin'], function ($router) {
	// --目录--
	$router->get('category', 'CategoryController@index');
	$router->post('category', 'CategoryController@store');
	$router->get('category/{category}/delete', 'CategoryController@destroy');
	$router->get('category/{category}/edit', 'CategoryController@edit');
	$router->post('category/{category}/edit', 'CategoryController@store');
	$router->get('category/{category}/show', 'CategoryController@show');
	$router->get('category/getcategorychain', 'CategoryController@getCatagoryChain');

	// --文章--
	$router->get('articles', 'ArticleController@index');
	$router->post('article', 'ArticleController@store');
});
