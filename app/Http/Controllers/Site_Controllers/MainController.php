<?php

namespace App\Http\Controllers\Site_Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Mail;
use App\Mail\clientMail;
use App\Mail\ownerMail;
use DB;




class MainController extends Controller
{
	// public function viewHome(){

	// 	$title="TopNotch - Home";
	// 	$logo=DB::table('website_logo')->select('logo')->where(['id'=>'1'])->first();
	// 	$about=DB::table('about_us_details')->where(['id'=>'1'])->first();
	// 	return view('ClientSite/home',['page_title'=>$title,'web_logo'=>$logo,'about'=>$about]);
	// }
	
	public function viewIndex(){
    	$title="TopNotch - Index";
		//$logo=DB::table('website_logo')->select('logo')->where(['id'=>'1'])->first();
		$about=DB::table('about_us_details')->where(['id'=>'1'])->first();
		//return view('ClientSite/index',['page_title'=>$title,'web_logo'=>$logo,'about'=>$about]);
		return view('ClientSite/index',['page_title'=>$title,'about'=>$about]);
    }

	public function viewReservation(){
		$title="TopNotch - Reservation";
		//$logo=DB::table('website_logo')->select('logo')->where(['id'=>'1'])->first();
		$about=DB::table('about_us_details')->where(['id'=>'1'])->first();
		//return view('ClientSite/reservation',['page_title'=>$title,'web_logo'=>$logo,'about'=>$about]);
		return view('ClientSite/reservation',['page_title'=>$title,'about'=>$about]);	
	}

	public function viewAboutUs(){
		$title="TopNotch - About Us";
		//$logo=DB::table('website_logo')->select('logo')->where(['id'=>'1'])->first();
		$about=DB::table('about_us_details')->where(['id'=>'1'])->first();
		return view('ClientSite/about_us',['page_title'=>$title,'about'=>$about]);


	}

	public function viewContactUs(){
		$title="TopNotch - Contact Us";
		//$logo=DB::table('website_logo')->select('logo')->where(['id'=>'1'])->first();
		$about=DB::table('about_us_details')->where(['id'=>'1'])->first();
		//return view('ClientSite/menu',['page_title'=>$title,'web_logo'=>$logo,'about'=>$about]);
		return view('ClientSite/contact_us',['page_title'=>$title,'about'=>$about]);	

	}

	public function viewMenu(){
		$title="TopNotch - Our Menu";
		
		$cat=DB::table('menu_category')->get();
		//$logo=DB::table('website_logo')->select('logo')->where(['id'=>'1'])->first();
		$about=DB::table('about_us_details')->where(['id'=>'1'])->first();
		//return view('ClientSite/menu',['page_title'=>$title,'web_logo'=>$logo,'about'=>$about]);
		return view('ClientSite/menu',['page_title'=>$title,'about'=>$about,'cat'=>$cat]);	

	}

	public function viewKitchenGarden(){

		$title="TopNotch - Kitchen Garden";
		
		//$logo=DB::table('website_logo')->select('logo')->where(['id'=>'1'])->first();
		$about=DB::table('about_us_details')->where(['id'=>'1'])->first();
		//return view('ClientSite/menu',['page_title'=>$title,'web_logo'=>$logo,'about'=>$about]);
		return view('ClientSite/kitchen_garden',['page_title'=>$title,'about'=>$about]);	
	}


	public function doReservation(Request $request){
			 $current_date = date("Y.m.d h:i:s");
			$total_persons;
			 $request->rev_name;
			 $request->rev_email;
			 $request->rev_phone;
			 $request->date;
			 $request->restime;

			if($request->res_person==="other"){
				$total_persons =	$request->res_person1;
			}
			else{
				$total_persons =	$request->res_person;
			}

			$add_res=array(
                'person_name' => $request->rev_name,
                'person_email' => $request->rev_email, 
                'person_phone'=>$request->rev_phone,
                'res_date'=>$request->date,
                'res_time'=>$request->restime,
                'res_persons'=>$total_persons,
                'created_at'=>$current_date,
            );

			// echo "<pre>";
   			//print_r($add_res);

			if(DB::table('reservation_order')->insert($add_res)){
                
            		Mail::send(new clientMail());
            		Mail::send(new ownerMail());
            		return redirect('Reservation')->with(['success' => 'Your Request Successfully Sent']);
            }

            else{

            	return redirect('Reservation')->with(['error' => 'Something went wrong']);
            }


	}	

	public function sendEmail(){

		Mail::send(new newMail());
	}

	// public function doReserveSeat(Request $request){
 //      $current_date = date("Y.m.d h:i:s");
 //      $name=$request->post('name');
 //      $email=$request->post('email');
 //      $phone=$request->post('phone');
 //      $resdate=$request->post('resdate');
 //      $time=$request->post('restime');
 //      if($request->post('resperson')){
 //        $person=$request->post('resperson');
 //      }else{
 //        $person=$request->post('other_seats');
 //      }
      
      

 //      $res=array(
 //        'person_name'=>$name,
 //        'person_email'=>$email,
 //        'person_phone'=>$phone,
 //        'res_date'=>$resdate,
 //        'res_time'=>$time,
 //        'res_persons'=>$person,
 //        'created_at'=>$current_date,
 //      );

 //      if(DB::table('reservation_order')->insert($res)){
 //         return redirect('Reservation')->with(['success' => 'Your Request Successfully Sent']);
 //      }
 //    }


}
