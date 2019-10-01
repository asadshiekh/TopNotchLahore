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
                return redirect('add-menu-category')->with(['success' => 'Welcome To the Admin-Panel']);
            }
        }

    }

    public function viewUpdateCatModal(Request $request){
    $id=$request->post('x');
    $data=DB::table('menu_category')->where(['cat_id'=>$id])->first();
    $cat_name=str_replace("_"," ",$data->cat_name);
    // print_r($data);

    echo '<div id="myModalCat" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <form>
     <!--  @csrf -->
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

        <label style="display: inline;">Rewrite Category Name:</label><p id="name-error" style="display: inline;"></p>
        <div class="input-group">
          <div class="input-group-addon">
            <i class="fa fa-yelp"></i>
          </div>
          <input type="text" placeholder="Enter Category Name" class="form-control" name="up_cat_name" id="up_cat_name" value="'.$cat_name.'" required onkeyup="checkname()">
        </div>

        <label style="display: inline;">ReChoose Category Image:</label><p id="name-error" style="display: inline;"></p>
        <div class="input-group">
          <div class="input-group-addon">
            <i class="fa fa-yelp"></i>
          </div>
          <input type="file" placeholder="Select Image" class="form-control" name="up_cat_image" id="up_cat_image" required onkeyup="checkname()" value="'.$data->cat_image.'">

        </div>
        <label>Current Uploaded Image:</label>
          <img src="uploads/Category/'.$data->cat_image.'" width="30%"/>
        
        <!-- <i class="fa fa-spinner fa-spin" style="font-size:24px"></i> --> 

        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-default" onclick="update_cat_content()">ADD</button>
        </div>
      </div>

    </div>
  </form>

</div>
</div>';
    }
}
