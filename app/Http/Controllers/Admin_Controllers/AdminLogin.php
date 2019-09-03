<?php

namespace App\Http\Controllers\Admin_Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminLogin extends Controller
{
    public function viewLogin(){

    	$title="TopNotch - Login";
		return view('AdminSite/login',['page_title'=>$title]);
    }

    public function doLogin(Request $request){


    	
    }
}
