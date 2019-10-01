@extends('AdminSite.template.master')
@section('content')


<!--content-->

<!-- page content -->
<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>Preview <i class="fa fa-building-o"></i></h3>
      </div>
      <div class="title_right">
        <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">

        </div>
      </div>
    </div>
    <div class="clearfix"></div>
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <h2 style="font-family:'italic',bold">Menu Categories</h2>
            <ul class="nav navbar-right panel_toolbox">
              <li><a class=""><i class="fa fa-dashboard"></i></a>
              </li>`
              <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
              </li>
              <li><a class="close-link"><i class="fa fa-close"></i></a>
              </li>
            </ul>
            <div class="clearfix"></div>
          </div>
          <div class="x_content">
            <div class="box-header">
                <h3 class="box-title text-center" id="heading-head" style="font-family:'Courier New', Courier, monospace; padding: 4%;">Add Menu Categories<small style="font-family:'italic',bold"> Here... </small></h3>
              </div>


            <!-- Start Content-->
            <form enctype="multipart/form-data" method="post" action="{{url('do-upload-cat')}}">
             @csrf
            <div class="form-group col-sm-12 col-md-6 col-md-offset-2">
              <label>Category Name:</label>
              <div class="input-group">
                <div class="input-group-addon">
                  <i class="fas fa-i-cursor"></i>

                </div>
                <input type="text" class="form-control" name="cat_name" id="cat_name" placeholder="Enter Category Name">
              </div>
            </div>
            <div class="form-group col-sm-12 col-md-6 col-md-offset-2">
              <label>Category Image:</label>
              <div class="input-group">
                <div class="input-group-addon">
                  <i class="fas fa-image"></i>

                </div>
                <input type="file" class="form-control" name="cat_img" id="cat_img" placeholder="Upload Image">
              </div>
            </div>
            <div class="form-group col-sm-12 col-md-6 col-md-offset-2">
              <div class="input-group" style="padding-top: 23px;">
               <input type="submit" class="btn btn-success btn-md" name="about_btn" value="Add Category">
              </div>
            </div>
            </form>

            
             <div class="box-header">
                <h3 class="box-title text-center" id="heading-head" style="font-family:'Courier New', Courier, monospace; padding: 4%;">View Menu Categories<small style="font-family:'italic',bold"> Here... </small></h3>
              </div>

              <table id="datatable-checkbox" class="table table-striped table-bordered bulk_action responsive no-wrap" style="width: 80%;text-align: center;">

                  <thead>
                    <tr id="city-tr">
                     <th>Category Name</th>  
                     <th>Category Image</th>                
                     <th>Action</th>
                   </tr>
                 </thead>


                 <tbody>
                  @foreach($cat as $cat)
                <tr id=""> 
                  <td><?php echo $cat_name=str_replace("_"," ",$cat->cat_name);?></td>
                  <td><img src="uploads/Category/{{$cat->cat_image}}"  width="20%"></td>
                  <td><i class="fa fa-pencil" onclick="show_model_form('{{$cat->cat_id}}');"></i>&nbsp; |&nbsp; <i class="fa fa-trash"></i></td>
                </tr>
                @endforeach
               </tbody>
              
          </table>
           <!-- End Content -->


    </div>
  </div>
</div>
</div>
</div>
</div>

<!-- modal window start here -->
<div id="update_cat_modal">
  
</div>
<!-- modal win dow ends here -->

<script type="text/javascript">
  var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
  function show_model_form(x) {
    var x=x;
    // alert(x);
    $.post("{{url('view-update-category')}}",{_token:CSRF_TOKEN,x:x},function(data){
     // alert(data);
     if(data){
      $("#update_cat_modal").html(data);
      $("#myModalCat").modal('show');
     }
    });
  }
</script>
@endsection




