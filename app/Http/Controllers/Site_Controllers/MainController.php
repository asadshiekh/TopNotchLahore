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
		$about=DB::table('about_us_details')->where(['id'=>'1'])->first();
		return view('ClientSite/home',['page_title'=>$title,'web_logo'=>$logo,'about'=>$about]);
	}
	
	public function viewIndex(){
    	$title="TopNotch - Index";
		$logo=DB::table('website_logo')->select('logo')->where(['id'=>'1'])->first();
		$about=DB::table('about_us_details')->where(['id'=>'1'])->first();
		return view('ClientSite/index',['page_title'=>$title,'web_logo'=>$logo,'about'=>$about]);
    }

	public function viewReservation(){
		$title="TopNotch - Reservation";
		$logo=DB::table('website_logo')->select('logo')->where(['id'=>'1'])->first();
		$about=DB::table('about_us_details')->where(['id'=>'1'])->first();
		return view('ClientSite/reservation',['page_title'=>$title,'web_logo'=>$logo,'about'=>$about]);	
	}

	public function viewContactUs(){
		$title="TopNotch - Contact Us";
		$logo=DB::table('website_logo')->select('logo')->where(['id'=>'1'])->first();
		$about=DB::table('about_us_details')->where(['id'=>'1'])->first();
		return view('ClientSite/contact_us',['page_title'=>$title,'web_logo'=>$logo,'about'=>$about]);	

	}

	public function viewMenu(){
		$title="TopNotch - Our Menu";
		$logo=DB::table('website_logo')->select('logo')->where(['id'=>'1'])->first();
		$about=DB::table('about_us_details')->where(['id'=>'1'])->first();
		return view('ClientSite/menu',['page_title'=>$title,'web_logo'=>$logo,'about'=>$about]);	

	}

	public function sendEmail(){

		Mail::send(new newMail());
	}

	public function doReserveSeat(Request $request){
      $current_date = date("Y.m.d h:i:s");
      $name=$request->post('name');
      $email=$request->post('email');
      $phone=$request->post('phone');
      $resdate=$request->post('resdate');
      $time=$request->post('restime');
      if($request->post('resperson')){
        $person=$request->post('resperson');
      }else{
        $person=$request->post('other_seats');
      }
      
      

      $res=array(
        'person_name'=>$name,
        'person_email'=>$email,
        'person_phone'=>$phone,
        'res_date'=>$resdate,
        'res_time'=>$time,
        'res_persons'=>$person,
        'created_at'=>$current_date,
      );

      if(DB::table('reservation_order')->insert($res)){
         return redirect('Reservation')->with(['success' => 'Your Request Successfully Sent']);
      }
    }


}
