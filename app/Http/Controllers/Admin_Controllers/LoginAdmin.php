<?php

namespace App\Http\Controllers\Admin_Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
 class LoginAdmin extends Controller
{
    public function doLoginAccount(Request $request){

         $email = $request->get('admin_email');
         $password = $request->get('admin_password');

         $info=DB::table('admin_account')->select('*')->where([
            ['email','=',[$email]],
            ['password','=',[$password]],
         ])->first();

         if($info){

         $admindata=array(
            "id"=>$info->id,
            "admin_name"=>$info->name,
            "admin_email"=>$info->email,
            "status"=>true
        );

        $request->session()->put($admindata);

        return redirect('dashboard')->with(['success' => 'Welcome To the Admin-Panel']);

        }

        else{
        
        return redirect('admin-login')->with(['error' => 'Enter Valid Information']);
        
        }

    }


    public function adminLogout(Request $request){

        $request->session()->flush();
        return redirect('admin-login')->with(['warning' => 'Have a nice Day']);
    }



}
