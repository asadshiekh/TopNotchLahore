<?php

namespace App\Http\Controllers\Admin_Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\menu_validator;
use Validator;
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

    public function viewCategoryPage(){
        $title="TopNotch - Category";
        $data=DB::table('menu_category')->get();
        return view('AdminSite/add_category',['page_title'=>$title,'cat'=>$data]);
    }
    
    public function doUploadCategory(Request $request){
        $current_date = date("Y.m.d h:i:s");
        $cat_name = $request->post('cat_name');
        $cat_name=str_replace(" ", "_", $cat_name);
        $file = $request->file('cat_img');
        $filename = $file->getClientOriginalName();
        $path ='uploads/Category';
        $new = time().$filename;
         if($file->move($path, $new)){
            $cat_add=array(
                'cat_name' => $cat_name,
                'cat_image' => $new, 
                'created_at'=>$current_date
            );
            if(DB::table('menu_category')->insert($cat_add)){
                return redirect('add-menu-category')->with(['success' => 'Category Successfully Added']);
            }
        }

    }

    public function viewUpdateCatModal(Request $request){
    $id=$request->post('x');
    $data=DB::table('menu_category')->where(['cat_id'=>$id])->first();
    $cat_name=str_replace("_"," ",$data->cat_name);
    // print_r($data);
    $cat_id="'".$data->cat_id."'";
   
    echo '<div id="myModalCat" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <form enctype="multipart/form-data" action="do-update-category">
     
     <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Update Category ?</h4>
        <div class="col-sm-6 col-md-offset-4" id="loading-spin">
          <i id="i" style="font-size:100px"></i>
        </div>
        <div class="col-sm-6 col-md-offset-4" id="loading-true">
          <i id="tru" style="font-size:100px; color: #38b75e"></i>
        </div>
      </div>
      <div class="modal-body" id="modal-content">
        <input type="hidden" name="cat_id" value="'.$data->cat_id.'">
        <label style="display: inline;">Rewrite Category Name:</label><p id="name-error" style="display: inline;"></p>
        <div class="input-group">
          <div class="input-group-addon">
            <i class="fa fa-yelp"></i>
          </div>
          <input type="text" placeholder="Enter Category Name" class="form-control" name="up_cat_name"  id="up_cat_name" value="'.$cat_name.'" required="required" onkeyup="checkname()">
        </div>

       
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-default">Update</button>
            </div>
          </div>

        </div>
      </form>

    </div>
    </div>';
    }
    public function viewUpdateCatModal1(Request $request){
    $id=$request->post('x');
    $data=DB::table('menu_category')->where(['cat_id'=>$id])->first();
    $cat_name=str_replace("_"," ",$data->cat_name);
    
    
   
    echo ' <label>Current Uploaded Image:</label>
    <input type="hidden" value="'.$data->cat_id.'" name="cat_id">
          <img src="uploads/Category/'.$data->cat_image.'" width="30%"/>';
    }



    public function doUpdateCatModal(Request $request){
    // echo "yes";
        $id=$request->get('cat_id');
        $current_date = date("Y.m.d h:i:s");
        $cat_name = $request->get('up_cat_name');
        echo $cat_name=str_replace(" ", "_", $cat_name);
        
            $cat_up_name=array(
                'cat_name' => $cat_name, 
                'updated_at'=>$current_date
            );
            if(DB::table('menu_category')->where(['cat_id'=>$id])->update($cat_up_name)){
                return redirect('add-menu-category')->with(['success' => 'Successfully Updated']);
            }
        

    }


    public function doUpdateCatModal1(Request $request){
    
        $id=$request->post('cat_id');
        $current_date = date("Y.m.d h:i:s");
        $file = $request->file('up_cat');
        $filename = $file->getClientOriginalName();
        $path ='uploads/Category';
        $new = time().$filename;
         if($file->move($path, $new)){
            $cat_add=array(
                'cat_image' => $new, 
                'updated_at'=>$current_date
            );
            if(DB::table('menu_category')->where(['cat_id'=>$id])->update($cat_add)){
                return redirect('add-menu-category')->with(['success' => 'successfully updated']);
            }
        }

    }

    public function doDelCategory($id){
        // echo $id;
        if(DB::table('menu_category')->where(['cat_id'=>$id])->delete()){
            return redirect('add-menu-category')->with(['success' => 'successfully Deleted']);
        }
    }


    //menu funtions

    public function viewMenuPage(){
        $title="TopNotch - Logo";
        $data=DB::table('add_menu_item')->get();
        $cats=DB::table('menu_category')->get();
        return view('AdminSite/add_menu',['page_title'=>$title,'items'=>$data,'cats'=>$cats]);
    }

    public function doAddMenuItem(Request $request){


        $current_date = date("Y.m.d h:i:s");
        $cat= $request->post('selected_cat');
        $name= $request->post('item_name');
        $price= $request->post('item_price');
        $des=$request->post('item_des');
        $type=$request->post('item_type');
        $discount=$request->post('item_discount');

        if($discount == ""){
           $discount="null";
        }
        $item = array(
            'item_category' => $cat,
            'item_name' => $name,
            'item_price' => $price,
            'item_des' => $des,
            'item_type' => $type,
            'item_discount' => $discount,
            'created_at'=>$current_date
             );
        if(DB::table('add_menu_item')->insert($item)){
         return redirect('view-menu-page')->with(['success' => 'Item Successfully Added in Your Menu']);
        }

      

    }

    public function doDelMenuItem($id){
     if(DB::table('add_menu_item')->where(['item_id'=>$id])->delete()){
         return redirect('view-menu-page')->with(['success' => 'Item Successfully Deleted From Your Menu']);
        }
    }

    public function doOpenUpdateModel(Request $request){
        $id=$request->post('id');
        $data=DB::table('add_menu_item')->where(['item_id'=>$id])->first();
        $cats=DB::table('menu_category')->get();

         // print_r($data);
        echo '<div class="form-group col-sm-12 col-md-6 col-md-offset-3">
              <label>Item Category:</label>
              <div class="input-group">
                <div class="input-group-addon">
                  <i class="fab fa-yelp"></i>
                </div>
                <select name="up_selected_cat" required="required" id="up_selected_cat" class="form-control">
                  <option id="my-option" selected="selected" hidden value="'.$data->item_category.'">'.$data->item_category.'</option>';
                  foreach($cats as $cats){
                   $cat_name=str_replace("_"," ",$cats->cat_name);
                  echo '<option class="form-control" value="'.$cats->cat_name.'">'.$cat_name.'</option>';
                  }
                echo '</select>
              </div>
            </div>
            <input type="hidden" name="item_id" value="'.$data->item_id.'"/>

                <div class="form-group col-sm-12 col-md-6 col-md-offset-3">
              <label>Item Name:</label>
              <div class="input-group">
                <div class="input-group-addon">
                  <i class="fas fa-i-cursor"></i>

                </div>
                <input type="text" class="form-control" required="required" name="up_item_name" id="up_item_name" placeholder="Enter Name" value="'.$data->item_name.'">
              </div>
            </div>
            <div class="form-group col-sm-12 col-md-6 col-md-offset-3">
              <label>Item Price:</label>
              <div class="input-group">
                <div class="input-group-addon">
                  <i class="fas fa-dollar-sign"></i>

                </div>
                <input type="text" class="form-control" required="required" name="up_item_price" id="up_item_price" placeholder="Enter Price" value="'.$data->item_price.'">
              </div>
            </div>
            <div class="form-group col-sm-12 col-md-6 col-md-offset-3">
              <label>Item Description:</label>
              <div class="input-group">
                <div class="input-group-addon">
                  <i class="fas fa-info"></i>

                </div>
                <textarea type="text" class="form-control" required="required" name="up_item_des" id="up_item_des" placeholder="Write Some Description" value="'.$data->item_des.'">'.$data->item_des.'</textarea>
              </div>
            </div>';


    }

    public function doUpdateMenuItem(Request $request){
        $current_date = date("Y.m.d h:i:s");
        $id= $request->post('item_id');
        $cat= $request->post('up_selected_cat');
        $name= $request->post('up_item_name');
        $price= $request->post('up_item_price');
        $des=$request->post('up_item_des');
        $type=$request->post('up_item_type');
        $discount=$request->post('up_item_discount');

        if($type == "simple"){
           $discount="null";
        }else if($type == "chef"){
           $discount="null";
        }
         $up_item = array(
            'item_category' => $cat,
            'item_name' => $name,
            'item_price' => $price,
            'item_des' => $des,
            'item_type' => $type,
            'item_discount' => $discount,
            'updated_at'=>$current_date
             );
        if(DB::table('add_menu_item')->where(['item_id'=>$id])->update($up_item)){
         return redirect('view-menu-page')->with(['success' => 'Item Successfully Updated From Your Menu']);
        }
    }


    public function viewAboutUsPage(){
        $title="TopNotch - About";
        $about=DB::table('about_us_details')->first();
        return view('AdminSite/manage_about_us',['page_title'=>$title,'about'=>$about]);
    }

    public function editAboutUsDetail(Request $request){
      $current_date = date("Y.m.d h:i:s");
      $number=$request->post('org_no');
      $email=$request->post('org_email');
      $address=$request->post('org_addr');
      $up_addr = array(
            'org_number' => $number,
            'org_email' => $email,
            'org_address' => $address,
            'updated_at'=>$current_date
             );
        if(DB::table('about_us_details')->where(['id'=>"1"])->update($up_addr)){
         return redirect('view-about-us')->with(['success' => 'Your Details Successfully Updated']);
        }
    }



}
