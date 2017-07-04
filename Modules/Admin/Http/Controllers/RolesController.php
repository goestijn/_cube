<?php

namespace Modules\Admin\Http\Controllers;

use Illuminate\Routing\Controller;
use Modules\Admin\Entities\Role;

class RolesController extends Controller
{

	public function edit($slug)
	{

		$role = Role::where('slug', $slug)->firstOrFail();
		dd($role);

	}


	public function update()
	{



	}

}
