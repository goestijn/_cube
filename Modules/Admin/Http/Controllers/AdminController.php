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

    	return (string) Auth()->User()->hasAccess(['view-admin', 'test']);
    	foreach (Auth()->User()->permissions as $permission)
    		echo $permission->permission;

    }

}
