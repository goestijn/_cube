<?php

namespace Modules\Admin\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class UsersSessionsController extends Controller
{

	public function show()
	{
		return view('admin::login');
	}


	public function create(Request $request)
	{
		
		if (!Auth()->attempt(['email' => $request->email, 'password' => $request->password])) {

			Flash()->danger('No valid user was found for the given credentials', 'Failed to login');
			return redirect()->back();

		}
		
    	Flash()->success('You are successfully loged in to the system', sprintf('Hello %s', Auth()->user()->firstname));
		return redirect('/admin');

	}


	public function destroy()
	{

		$user = Auth()->user();
		Auth()->logout();

		Flash()->info('Hope to see you again soon', sprintf('Goodbye %s', $user->firstname));
		return redirect('/admin/login');

	}

}
