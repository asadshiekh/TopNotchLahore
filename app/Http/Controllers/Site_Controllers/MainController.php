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
    	$title="Top Notch Lahore - First Lake Restaurant | Orgainc Food";
    	$meta_description="The First Lake Restaurant in Lahore, TOP NOTCH offers the perfect setting for families and friends";
    	$meta_keywords="top notch lahore,top notch restaurant,organic food,fine dining restaurant,best restaurants in lahore for dinner";
		//$logo=DB::table('website_logo')->select('logo')->where(['id'=>'1'])->first();
		$about=DB::table('about_us_details')->where(['id'=>'1'])->first();
		//return view('ClientSite/index',['page_title'=>$title,'web_logo'=>$logo,'about'=>$about]);
		return view('ClientSite/index',[
			'page_title'=>$title,
			'meta_descri'=>$meta_description,
			'meta_keyword'=>$meta_keywords,
			'about'=>$about
		]);
    }

	public function viewReservation(){
		$title="TopNotch - Reservation";
		$meta_description="TOP NOTCH restaurant are committed to providing you with an exceptional dining experience every time you walk through our doors";
    	$meta_keywords="top notch lahore,top notch Resveration,organic food,fine dining restaurant,best restaurants in lahore for dinner,best restaurants in lahore for couples";
		//$logo=DB::table('website_logo')->select('logo')->where(['id'=>'1'])->first();
		$about=DB::table('about_us_details')->where(['id'=>'1'])->first();
		//return view('ClientSite/reservation',['page_title'=>$title,'web_logo'=>$logo,'about'=>$about]);
		return view('ClientSite/reservation',[
			'page_title'=>$title,
			'meta_descri'=>$meta_description,
			'meta_keyword'=>$meta_keywords,
			'about'=>$about]);	
	}

	public function viewAboutUs(){
		$title="TopNotch - About Us";
		$meta_description="Top Notch is set up with a Lake View in international Polo Grounds of Lahore. A lovely and relaxing environment for people to come and enjoy";
    	$meta_keywords="Top Notch lahore , top notch Lake View , Organic food , About Top Notch restaurant , best restaurants in lahore for dinner , best restaurants in lahore for families";
		//$logo=DB::table('website_logo')->select('logo')->where(['id'=>'1'])->first();
		$about=DB::table('about_us_details')->where(['id'=>'1'])->first();
		return view('ClientSite/about_us',[
			'page_title'=>$title,
			'meta_descri'=>$meta_description,
			'meta_keyword'=>$meta_keywords,
			'about'=>$about]);


	}

	public function viewContactUs(){
		$title="TopNotch - Contact Us";
		$meta_description="If you have an enquiry, feedback or want to talk to us about reservations there are a number of ways you can reach us.";
    	$meta_keywords="Top Notch lahore , Organic food , About Top Notch restaurant , best restaurants in lahore for families , Contact Top Notch HR";
		//$logo=DB::table('website_logo')->select('logo')->where(['id'=>'1'])->first();
		$about=DB::table('about_us_details')->where(['id'=>'1'])->first();
		//return view('ClientSite/menu',['page_title'=>$title,'web_logo'=>$logo,'about'=>$about]);
		return view('ClientSite/contact_us',[
			'page_title'=>$title,
			'meta_descri'=>$meta_description,
			'meta_keyword'=>$meta_keywords,
			'about'=>$about]);	

	}

	public function viewMenu(){
		$title="TopNotch - Our Menu";
		$meta_description="Top Notch has a passion for market leading services and nothing but the best food quality We are the first ever organic inspired fine dine restaurant of Pakistan";
    	$meta_keywords="Top Notch lahore,Organic food , About Top Notch restaurant , best restaurants in lahore for families, Best Steaks in Lahore, Top Notch Menu";
		$cat=DB::table('menu_category')->get();
		//$logo=DB::table('website_logo')->select('logo')->where(['id'=>'1'])->first();
		$about=DB::table('about_us_details')->where(['id'=>'1'])->first();
		//return view('ClientSite/menu',['page_title'=>$title,'web_logo'=>$logo,'about'=>$about]);
		return view('ClientSite/menu',[
			'page_title'=>$title,
			'about'=>$about,
			'meta_descri'=>$meta_description,
			'meta_keyword'=>$meta_keywords,
			'cat'=>$cat]);	

	}

	public function viewKitchenGarden(){

		$title="TopNotch - Kitchen Garden";
		$meta_description="Growing the finest ingredients on site in our kitchen gardens setting the standards and trends, inspiring others to follow.";
    	$meta_keywords="Top Notch lahore , Organic food , Inspired Kitchen Garden , best restaurants in lahore for families , restaurants in lahore for dinner";
		//$logo=DB::table('website_logo')->select('logo')->where(['id'=>'1'])->first();
		$about=DB::table('about_us_details')->where(['id'=>'1'])->first();
		//return view('ClientSite/menu',['page_title'=>$title,'web_logo'=>$logo,'about'=>$about]);
		return view('ClientSite/kitchen_garden',[
			'page_title'=>$title,
			'meta_descri'=>$meta_description,
			'meta_keyword'=>$meta_keywords,
			'about'=>$about
		]);	
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
