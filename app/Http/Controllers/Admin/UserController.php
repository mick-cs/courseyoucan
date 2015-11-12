<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\UserFormRequest;
use Auth;
use View;

class UserController extends Controller {
	/**
	 * 用户登录界面
	 *
	 * @return Response
	 */
	public function getLogin() {
		if (Auth::check()) {
			return redirect('admin/dashboard');
		}
		return view('admin.login');
	}

	/**
	 * 接受用户登录POST数据
	 *
	 * @return Response
	 */
	public function postLogin(UserFormRequest $request) {
		$creden = [
			'username' => $request->input('username'),
			'password' => $request->input('password'),
		];

		$remember = $request->input('remember');

		// 登录成功跳转到Dashboard
		if (Auth::attempt($creden, $remember)) {
			return redirect('admin/dashboard');
		} else {
			return redirect('admin/login')->with('message', 'User name or password is incorrect!');
		}
	}

	/**
	 * 退出登录
	 * @return [type] [description]
	 */
	public function getLogout() {
		Auth::logout();
		return redirect('admin/login');
	}

}
