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
            <h2 style="font-family:'italic',bold">Restaurant Menu</h2>
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
                <h3 class="box-title text-center" id="heading-head" style="font-family:'Courier New', Courier, monospace; padding: 4%;">Menu Items<small style="font-family:'italic',bold"> Here... </small></h3>
              </div>


            <!-- Start Content-->
            <form enctype="multipart/form-data" method="post" action="{{url('do-add-in-menu')}}">
             @csrf
            <div class="form-group col-sm-12 col-md-6 col-md-offset-3">
              <label>Item Name:</label>
              <div class="input-group">
                <div class="input-group-addon">
                  <i class="fas fa-i-cursor"></i>

                </div>
                <input type="text" class="form-control" name="item_name" id="item_name" placeholder="Enter Name">
              </div>
            </div>
            <div class="form-group col-sm-12 col-md-6 col-md-offset-3">
              <label>Item Price:</label>
              <div class="input-group">
                <div class="input-group-addon">
                  <i class="fas fa-dollar-sign"></i>

                </div>
                <input type="text" class="form-control" name="item_price" id="item_price" placeholder="Enter Price">
              </div>
            </div>
            <div class="form-group col-sm-12 col-md-6 col-md-offset-3">
              <label>Item Description:</label>
              <div class="input-group">
                <div class="input-group-addon">
                  <i class="fas fa-info"></i>

                </div>
                <textarea type="text" class="form-control" name="item_des" id="item_des" placeholder="Write Some Description"></textarea>
              </div>
            </div>
            <div class="form-group col-sm-12 col-md-6 col-md-offset-3">
              <label>Item Type:</label><br/>

                <label>Simple:</label>
                <input type="radio" value="simple" name="item_type" onchange="show_per(this.value);" checked>

                <label style="margin-left: 20px;">Chef Selection:</label>
                <input type="radio" value="chef"  name="item_type" onchange="show_per(this.value);">

                <label style="margin-left: 20px;">Sale:</label>
                 <input type="radio" value="sale"  name="item_type" onchange="show_per(this.value);">

                <div class="percent-div" style="display: inline-block;">
                <input type="text" name="item_discount" placeholder="Enter Discount e.g:(20)">&nbsp;&nbsp;&nbsp;<span style="font-size:16px;font-weight: bold;">%</span>
              </div>
            </div>
            <div class="form-group col-sm-12 col-md-6 col-md-offset-3">
              <div class="input-group" style="padding-top: 23px;">
               <input type="submit" class="btn btn-success btn-md" name="about_btn" value="Add">
              </div>
            </div>
            </form>

            
             <div class="box-header">
                <h3 class="box-title text-center" id="heading-head" style="font-family:'Courier New', Courier, monospace; padding: 4%;">View Menu Categories<small style="font-family:'italic',bold"> Here... </small></h3>
              </div>

              <table id="datatable-checkbox" class="table table-striped table-bordered bulk_action responsive no-wrap" style="width: 100%;text-align: center;">

                  <thead >
                    <tr>
                     <th style="text-align: center;">Item Name</th>  
                     <th style="text-align: center;">Item Price</th>                
                     <th style="text-align: center;">Description</th>
                     <th style="text-align: center;">Type</th>
                     <th style="text-align: center;">Discount</th>
                     <th style="text-align: center;">Action</th>
                   </tr>
                 </thead>
                 <tbody>
                @foreach($items as $items)
                 <tr>
                   <td>{{$items->item_name}}</td>
                   <td>{{$items->item_price}}</td>
                   <td>{{$items->item_des}}</td>
                   <td>{{$items->item_type}}</td>
                   <td><?php if($items->item_discount == "null"){echo "0%";}else{
                    echo $items->item_discount."%";
                   } ?></td>
                   <td>
                    <form id="del-item-form{{$items->item_id}}" method="post" action="{{url('delete-item')}}/{{$items->item_id}}">
                      @csrf
                    <a onclick="open_modal('{{$items->item_id}}','{{$items->item_name}}','{{$items->item_price}}','{{$items->item_des}}','{{$items->item_type}}','{{$items->item_discount}}');"><i class="fa fa-pencil"></i></a>&nbsp; | &nbsp; <a type="submit" onclick="confirmSubmit('{{$items->item_id}}');"><i class="fa fa-trash"></i></a></td>
                    </form>
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
<div id="myModalMenu" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
<form enctype="multipart/form-data" method="post" action="">
  @csrf
     <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Update Category ?</h4>
        <div class="col-sm-6 col-md-offset-4" id="loading-spin">
          <i id="i" style="font-size:100px"></i>
        </div>
       
            </div>
            <div class="modal-body" id="modal-content">
              <form method="post" action="">
                @csrf
              <div class="row" id="modal-data">
                
                <div class="form-group col-sm-12 col-md-6 col-md-offset-3">
              <label>Item Name:</label>
              <div class="input-group">
                <div class="input-group-addon">
                  <i class="fas fa-i-cursor"></i>

                </div>
                <input type="text" class="form-control" name="up_item_name" id="up_item_name" placeholder="Enter Name">
              </div>
            </div>
            <div class="form-group col-sm-12 col-md-6 col-md-offset-3">
              <label>Item Price:</label>
              <div class="input-group">
                <div class="input-group-addon">
                  <i class="fas fa-dollar-sign"></i>

                </div>
                <input type="text" class="form-control" name="up_item_price" id="up_item_price" placeholder="Enter Price">
              </div>
            </div>
            <div class="form-group col-sm-12 col-md-6 col-md-offset-3">
              <label>Item Description:</label>
              <div class="input-group">
                <div class="input-group-addon">
                  <i class="fas fa-info"></i>

                </div>
                <textarea type="text" class="form-control" name="up_item_des" id="up_item_des" placeholder="Write Some Description"></textarea>
              </div>
            </div>
            <div class="form-group col-sm-12 col-md-6 col-md-offset-3">
              <label>Item Type:</label><br/>

                <label>Simple:</label>
                <input type="radio" value="simple" id="up_item_type" name="up_item_type" onchange="show_per(this.value);" checked>

                <label style="margin-left: 20px;">Chef Selection:</label>
                <input type="radio" value="chef"  id="up_item_type" name="up_item_type" onchange="show_per(this.value);">

                <label style="margin-left: 20px;">Sale:</label>
                 <input type="radio" value="sale" id="up_item_type" name="up_item_type" onchange="show_per(this.value);">

                <div class="percent-div" style="display: inline-block;">
                <input type="text" name="up_item_discount" id="up_item_discount" placeholder="Enter Discount e.g:(20)">&nbsp;&nbsp;&nbsp;<span style="font-size:16px;font-weight: bold;">%</span>
              </div>
            </div>
           
              </div>
        
      
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-default">Change</button>
            </div>
          </form>
          </div>

        </div>
      </form>

    </div>
</div>
<div id="update_menu_modal">
  
</div>
<!-- modal window ends here -->
<style type="text/css">
.image-td{
  width: 35% !important;
}
</style>
<script type="text/javascript">

  var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
  $(document).ready(function() {
    $(".percent-div").hide();
  });
  function show_per(x){
    if(x == "sale"){
      $(".percent-div").show();
  }else{
    $(".percent-div").hide();
    }
  }
    
  function confirmSubmit(x) {
  
  if (confirm("Are you sure you want to submit the form?")) {
  $('#del-item-form'+x).submit();
  }
  }

  function open_modal(id,name,price,des,type,discount){
    alert(id+" "+name+" "+price+" "+des+" "+type+" "+discount);
   $.post("{{url('open_model_window')}}",{_token:CSRF_TOKEN,id:id},function(data){
      if(data){
        // $("#modal-data").html(data);
        $("#myModalMenu").modal('show');
        $("#up_item_name").val(function() {
            return "yes" + '1';
        });
      }
   });
  }

</script>
@endsection




