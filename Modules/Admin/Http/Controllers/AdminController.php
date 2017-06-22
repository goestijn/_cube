<?php

namespace Modules\Admin\Http\Controllers;

use \Flash;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;

class AdminController extends Controller
{
    
    public function index()
    {
    	Flash::message('This is a testmessage', 'Lorem ipsum');
    	Flash::success('This is a testmessage', 'Lorem ipsum');
    	return view('admin::index');
    }

}
