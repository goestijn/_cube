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
		
		if (!Auth()->attempt(['email' => $request->email, 'password' => $request->password]))
			return redirect()->back();
		
		return redirect('/admin');

	}


	public function destroy()
	{

		Auth()->logout();
		return redirect('/admin/login');

	}

}
