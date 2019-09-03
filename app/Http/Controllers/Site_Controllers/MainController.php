<?php

namespace App\Http\Controllers\Site_Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Mail;
use App\Mail\newMail;

class MainController extends Controller
{
	public function viewHome(){

		$title="TopNotch - Home";
		return view('ClientSite/home',['page_title'=>$title]);
	}

	public function viewReservation(){
		$title="TopNotch - Reservation";
		return view('ClientSite/reservation',['page_title'=>$title]);	
	}

	public function viewContactUs(){
		$title="TopNotch - Contact Us";
		return view('ClientSite/contact_us',['page_title'=>$title]);	

	}

	public function viewMenu(){
		$title="TopNotch - Our Menu";
		return view('ClientSite/menu',['page_title'=>$title]);	

	}

	public function sendEmail(){

		Mail::send(new newMail());
	}


}
