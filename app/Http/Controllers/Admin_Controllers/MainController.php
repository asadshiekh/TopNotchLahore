<?php

namespace App\Http\Controllers\Admin_Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MainController extends Controller
{
    public function viewDashboard(){

    	$title="TopNotch - Dashboard";
		return view('AdminSite/dashboard',['page_title'=>$title]);
    }
}
