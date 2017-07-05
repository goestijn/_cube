<?php

namespace Modules\Admin\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;

class AdminController extends Controller
{
    
    public function index()
    {

    	return view('admin::index');
    
    }


    public function test()
    {
        //dd(\Modules\Admin\Entities\Role::find(2)->users);
        //dd(Auth()->User()->role->permissions);
    	return (string) Auth()->User()->hasAccess(['view-admin']) ? 'true' : 'false';
    	/*foreach (Auth()->User()->permissions as $permission)
    		echo $permission->name;*/

    }

}
