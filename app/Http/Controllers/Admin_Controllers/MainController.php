<?php

namespace App\Http\Controllers\Admin_Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class MainController extends Controller
{
    public function viewDashboard(){

    	$title="TopNotch - Dashboard";
		return view('AdminSite/dashboard',['page_title'=>$title]);
    }

    public function viewlogoPage(){

    	$title="TopNotch - Logo";
    	$logo=DB::table('website_logo')->select('logo')->where(['id'=>'1'])->first();
		return view('AdminSite/change_logo',['page_title'=>$title,'web_logo'=>$logo]);
    }
    public function doUploadLogo(Request $request){
    	
    	$current_date = date("Y.m.d h:i:s");
    	$file = $request->file('logo_img');
    	$filename = $file->getClientOriginalName();
    	$path ='uploads/logo';
        $new = time().$filename;
	     if($file->move($path, $new)){
	     	$logo_up=array(
	     		'logo' => $new, 
	     		'updated_at'=>$current_date
	     	);
	     	if(DB::table('website_logo')->where(['id'=>'1'])->update($logo_up)){
	     		return redirect('change-logo')->with(['success' => 'Logo Updated Successfully!']);
	     }

	     }
	    	
	    }
    
}
