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
            <h2 style="font-family:'italic',bold">Change Website Logo<small style="font-family:'italic',bold"> Here... </small></h2>
            <ul class="nav navbar-right panel_toolbox">
              <li><a class=""><i class="fa fa-dashboard"></i></a>
              </li>
              <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
              </li>
              <li><a class="close-link"><i class="fa fa-close"></i></a>
              </li>
            </ul>
            <div class="clearfix"></div>
          </div>
          <div class="x_content">
            <div class="box-header">
                <h3 class="box-title text-center" id="heading-head" style="font-family:'Courier New', Courier, monospace; padding: 4%;">Manage Your Logo</h3>
              </div>


            <!-- Start Content-->
            <form enctype="multipart/form-data" method="post" action="{{url('do-upload')}}">
           @csrf
                @if (session()->has('success'))
                 <script type="text/javascript">
                  swal("Deleted!", "Your cities has been deleted.", "success");
                </script>
                @endif
            <div class="form-group col-sm-12 col-md-6 col-md-offset-2">
              <label>Upload Image:</label>
              <div class="input-group">
                <div class="input-group-addon">
                  <i class="fa fa-file-video-o"></i>

                </div>
                <input type="file" class="form-control" name="logo_img" id="logo_img" placeholder="Upload Image">
              </div>
            </div>
             <div class="form-group col-sm-12 col-md-2">
              <div class="input-group" style="padding-top: 23px;">
               <input type="submit" class="btn btn-success btn-md" name="about_btn" value="Update Logo">
              </div>
            </div>
            <div class="form-group col-sm-12 col-md-3 col-md-offset-2">
              <label>Current Uploaded Image:</label>
              <label style="font-size: 12px;color:green;"></label>
            </div>
            <div class="form-group col-sm-8 col-sm-offset-1">
              <div class="input-group" style="padding-left: 32px;">
              <a href="{{url('uploads/logo')}}/{{$web_logo->logo}}" target="_blank"><img src="{{url('uploads/logo')}}/{{$web_logo->logo}}" class="respimg logo-vis" alt="" style="height: 100px;width: 200px;"></a>
              </div>
            </div>
           
            </form>

            
           <!-- End Content -->


    </div>
  </div>
</div>
</div>
</div>
</div>
<!--model-->
<div id="model_view_message"></div>
<div id="model_reply_message"></div>
<div id="view_user_model"></div>
<div  id="exampleModal" class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Update User</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div id="edit_text">
      </div>

    </div>
  </div>
</div>
<!--/model-->

<script>

</script>
@endsection




