<?php

namespace App\Http\Controllers\Site_Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Mail;
use App\Mail\newMail;
use DB;

class MainController extends Controller
{
	public function viewHome(){

		$title="TopNotch - Home";
		$logo=DB::table('website_logo')->select('logo')->where(['id'=>'1'])->first();
		return view('ClientSite/home',['page_title'=>$title,'web_logo'=>$logo]);
	}
	
	public function viewIndex(){
    	$title="TopNotch - Index";
		$logo=DB::table('website_logo')->select('logo')->where(['id'=>'1'])->first();
		return view('ClientSite/index',['page_title'=>$title,'web_logo'=>$logo]);
    }

	public function viewReservation(){
		$title="TopNotch - Reservation";
		$logo=DB::table('website_logo')->select('logo')->where(['id'=>'1'])->first();
		return view('ClientSite/reservation',['page_title'=>$title,'web_logo'=>$logo]);	
	}

	public function viewContactUs(){
		$title="TopNotch - Contact Us";
		$logo=DB::table('website_logo')->select('logo')->where(['id'=>'1'])->first();
		return view('ClientSite/contact_us',['page_title'=>$title,'web_logo'=>$logo]);	

	}

	public function viewMenu(){
		$title="TopNotch - Our Menu";
		$logo=DB::table('website_logo')->select('logo')->where(['id'=>'1'])->first();
		return view('ClientSite/menu',['page_title'=>$title,'web_logo'=>$logo]);	

	}

	public function sendEmail(){

		Mail::send(new newMail());
	}


}
