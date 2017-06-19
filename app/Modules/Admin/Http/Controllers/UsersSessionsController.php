<?php

namespace App\Modules\Admin\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class UsersSessionsController extends Controller
{
    

	public function login()
	{

		return view('admin::login');

	}


}
