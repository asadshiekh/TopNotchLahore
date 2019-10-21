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
            <h2 style="font-family:'italic',bold">About Us Content</h2>
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
                <h3 class="box-title text-center" id="heading-head" style="font-family:'Courier New', Courier, monospace; padding: 4%;">Edit About Us Dtails<small style="font-family:'italic',bold"> Here... </small></h3>
              </div>


            <!-- Start Content-->
            <form enctype="multipart/form-data" method="post" action="{{url('edit-about-us')}}" id="about-form">
             @csrf
              <div class="form-group col-sm-12 col-md-6 col-md-offset-2">
                <label>Company Number:</label>
                <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fas fa-i-cursor"></i>
                  </div>
                  <input type="text" required="required" class="form-control" name="org_no" id="org_no" placeholder="Enter Number" value="{{$about->org_number}}">
                </div>
              </div>

              <div class="form-group col-sm-12 col-md-6 col-md-offset-2">
                <label>Company Email:</label>
                <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fas fa-i-cursor"></i>
                  </div>
                  <input type="text" required="required" class="form-control" name="org_email" id="org_email" placeholder="Enter Email" value="{{$about->org_email}}">
                </div>
              </div>

              <div class="form-group col-sm-12 col-md-6 col-md-offset-2">
                <label>Company Address:</label>
                <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fas fa-i-cursor"></i>
                  </div>
                  <textarea type="text" class="form-control" name="org_addr" id="org_addr" placeholder="Enter Address" required="required" value="{{$about->org_address}}">{{$about->org_address}}</textarea>
                </div>
              </div>
           
              <div class="form-group col-sm-12 col-md-6 col-md-offset-2">
                <div class="input-group" style="padding-top: 23px;">
                 <a type="submit" class="btn btn-success btn-md" name="about_btn" onclick="aboutSubmit();">Edit Details</a>
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

<!-- modal window start here -->

<!-- //new -->
<div id="update_cat_modal">
  
</div>
<!-- modal win dow ends here -->
<style type="text/css">
.image-td{
  width: 35% !important;
}
</style>
<script type="text/javascript">

  var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
  function aboutSubmit() {
  
  if (confirm("Are you sure you want to Edit Details?")) {
    $('#about-form').submit();
    }
  }
 
</script>
@endsection




