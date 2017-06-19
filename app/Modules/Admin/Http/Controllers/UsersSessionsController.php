<?php

namespace App\Modules\Admin\Http\Controllers;


use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Modules\Admin\Models\User;


class UsersSessionsController extends Controller
{

	public function create()
	{

		return view('admin::login');

	}


	public function store(Request $request)
	{
		
		if (!Auth()->attempt(['email' => $request->email, 'password' => $request->password]))
			return redirect()->back();
		
		return redirect('/admin');

	}


	public function delete()
	{

		Auth()->logout();
		return redirect('/admin/login');

	}


}
