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
            <h2 style="font-family:'italic',bold">Reservations</h2>
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
                <h3 class="box-title text-center" id="heading-head" style="font-family:'Courier New', Courier, monospace; padding: 4%;">View Reservation Orders<small style="font-family:'italic',bold"> Here... </small></h3>
              </div>

              <table id="datatable-checkbox" class="table table-striped table-bordered bulk_action responsive no-wrap" style="width: 100%;text-align: center;">

                  <thead>
                    <tr id="city-tr">
                     <th>Name</th>  
                     <th>Email</th>                
                     <th>Phone</th>
                     <th>Persons</th>
                     <th>Date</th>
                     <th>Time</th>
                   </tr>
                 </thead>
                 <tbody>
                  @foreach($res_order as $res_order)
                  <tr> 
                     <td>{{$res_order->person_name}}</td>
                     <td>{{$res_order->person_email}}</td>
                     <td>{{$res_order->person_phone}}</td>
                     <td>{{$res_order->res_persons}}</td>
                     <td>{{$res_order->res_date}}</td>
                     <td>{{$res_order->res_time}}</td>
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



@endsection




