<?php

namespace Modules\Admin\Http\Controllers;

use Modules\Admin\Http\Requests\Users\LoginRequest;
use Illuminate\Routing\Controller;

class UsersSessionsController extends Controller
{

	public function show()
	{
		return view('admin::users.login');
	}


	public function create(LoginRequest $request)
	{
		
		if (!Auth()->attempt(['username' => $request->username, 'password' => $request->password], $request->remember ? true : false)) {

			Flash()->danger('No valid user was found for the given credentials', 'Failed to login');
			return redirect()->back();

		}
		
    	Flash()->success('You are successfully loged in to the system', sprintf('Hello %s', !empty(Auth()->user()->firstname) ? Auth()->user()->firstname : Auth()->user()->fullname));
		return redirect('/admin');

	}


	public function destroy()
	{

		$user = Auth()->user();
		Auth()->logout();

		Flash()->info('Hope to see you again soon', sprintf('Goodbye %s', !empty($user->firstname) ? $user->firstname : $user->fullname));
		return redirect('/admin/login');

	}

}
