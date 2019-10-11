<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <!-- Meta, title, CSS, favicons, etc. -->
  <meta name="csrf-token" content="{{csrf_token()}}"/>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title> {{ $page_title }} </title>
  
  
  
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
 
  <!-- Input Tags -->
  <!-- image cropper -->
  
 
   <!-- Date Dropper -->
  

  <!-- Bootstrap -->
  <link href="{{url('public/admin_assets/vendors/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">
  <!-- Font Awesome -->
  <link href="{{url('public/admin_assets/vendors/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
  <!-- NProgress -->
  <link href="{{url('public/admin_assets/vendors/nprogress/nprogress.css')}}" rel="stylesheet">
  <!-- bootstrap-daterangepicker -->
  <link href="{{url('public/admin_assets/vendors/bootstrap-daterangepicker/daterangepicker.css')}}" rel="stylesheet">

  <!-- Custom Theme Style -->
  <link href="{{url('public/admin_assets/build/css/custom.min.css')}}" rel="stylesheet">
  <!-- Ck Editors Basic -->
  <!-- javascript Css notify -->
  
  
</head>

<body class="nav-md">
  <div class="container body">
    <div class="main_container">

      <div class="col-md-3 left_col">
        <div class="left_col scroll-view">
          <div class="navbar nav_title" style="border: 0;">
            <a href="index.html" class="site_title"><!-- <span class="fa fa-smile-o"></span> --><img src="public/admin_assets/images/horseloader.png" style="height: 10%;width: 10%;" /> <span style="font-family: georgia regular;font-size: 20px;">TopNotch!</span></a>
          </div>

          <div class="clearfix"></div>

          <!-- menu profile quick info -->
          <div class="profile clearfix">
            <div class="profile_pic">
              <img src="{{url('public/admin_assets/production/images/img.jpg')}}" alt="..." class="img-circle profile_img">
            </div>
            <div class="profile_info">
              <span>Welcome Admin</span>
              <h2 style="font-family: georgia;font-size: 14px;"></h2>
            </div>
          </div>
          <!-- /menu profile quick info -->

          <br />

          <!-- sidebar menu -->
          <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
            <div class="menu_section">
              <h3>General</h3>
              <ul class="nav side-menu" style="font-family: georgia regular;">
                <li><a href="{{url('dashboard')}}"><i class="fa fa-home"></i> Dashboard </a>
                   <!--  <ul class="nav child_menu">
                    <li><a href="{{url('admin-dashboard')}}">Dashboard</a></li>                      
                  </ul> -->
                </li>


                <li><a><i class="fa fa-circle-o"></i> CMS <span class="fa fa-chevron-down"></span></a>

                  <ul class="nav child_menu">
                    <li><a href="{{url('change-logo')}}">Change Logo</a></li>
                    <li><a href="{{url('add-menu-category')}}">Menu Categories</a></li>
                    <li><a href="{{url('view-menu-page')}}">Manage Menu</a></li>
                    <li><a href="{{url('view-about-us')}}">Manage About Us</a></li>
                  
                  </ul>
                </li>
                <!-- n -->
               <!--  <li><a><i class="fa fa-circle-o"></i> ADD Details <span class="fa fa-chevron-down"></span></a>

                  <ul class="nav child_menu">
                    <li><a href="{{url('company-type')}}">View Types</a></li>
                                               
                    
                  </ul>
                </li>
 -->
              </ul>
            </div>
            
            <div class="menu_section">
              <h3>Account</h3>
              <ul class="nav side-menu">
                <li><a href="{{url('logout')}}"><i class="fa fa-bug"></i> Sign Out </a>

                </li>

              </ul>
            </div>

          </div>
         
        </div>
      </div>

      <!-- top navigation -->
      <div class="top_nav">
        <div class="nav_menu">
          <nav>
            <div class="nav toggle">
              <a id="menu_toggle"><i class="fa fa-bars"></i></a>
            </div>

            <ul class="nav navbar-nav navbar-right">
              <li class="">
                <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false" style="font-family: georgia;font-size: 14px;">
                  <img src="{{url('public/admin_assets/production/images/img.jpg')}}" alt="">
                  <span class=" fa fa-angle-down"></span>
                </a>
                <ul class="dropdown-menu dropdown-usermenu pull-right">
                  <li><a href="{{url('admin-profile')}}"> Profile</a></li>
                  <!-- <li>
                    <a href="javascript:;">
                      <span class="badge bg-red pull-right">50%</span>
                      <span>Settings</span>
                    </a>
                  </li>
                  <li><a href="javascript:;">Help</a></li> -->
                  <li><a href="{{url('logout')}}"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                </ul>
              </li>

              <li role="presentation" class="dropdown">
                <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                  <i class="fa fa-envelope-o"></i>
                  <span class="badge bg-green">6</span>
                </a>
                <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
               
                  <li>
                    <a>
                      <span class="image"><img src="{{url('public/admin_assets/production/images/img.jpg')}}" alt="Profile Image" /></span>
                      <span>
                        <span>John Smith</span>
                        <span class="time">3 mins ago</span>
                      </span>
                      <span class="message">
                        Film festivals used to be do-or-die moments for movie makers. They were where...
                      </span>
                    </a>
                  </li>
                  <li>
                    <div class="text-center">
                      <a>
                        <strong>See All Alerts</strong>
                        <i class="fa fa-angle-right"></i>
                      </a>
                    </div>
                  </li>
                </ul>
              </li>
            </ul>
          </nav>
        </div>
      </div>
      <!-- /top navigation -->

      @yield('content')

      <!-- footer content -->
      <footer>
        <div class="pull-right">
          <a href="#" style="font-family: georgia regular;font-size: 12px;">Admin Panel of TopNotch</a>
        </div>
        <div class="clearfix"></div>
      </footer>
      <!-- /footer content -->
    </div>
  </div>
  <!--jquery table-->

  <!-- jQuery -->
  <script src="https://kit.fontawesome.com/2208ead998.js"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <script src="{{url('public/admin_assets/vendors/jquery/dist/jquery.min.js')}}"></script>
  <!-- Bootstrap -->
  <script src="{{url('public/admin_assets/vendors/bootstrap/dist/js/bootstrap.min.js')}}"></script>
  <!-- FastClick -->
  <script src="{{url('public/admin_assets/vendors/fastclick/lib/fastclick.js')}}"></script>
  <!-- NProgress -->
  <script src="{{url('public/admin_assets/vendors/nprogress/nprogress.js')}}"></script>
  <!-- Chart.js -->
  <script src="{{url('public/admin_assets/vendors/Chart.js/dist/Chart.min.js')}}"></script>
  <!-- jQuery Sparklines -->
  <script src="{{url('public/admin_assets/vendors/jquery-sparkline/dist/jquery.sparkline.min.js')}}"></script>
  <script src="{{url('public/admin_assets/vendors/jQuery-Smart-Wizard/js/jquery.smartWizard.js')}}"></script>
  <!-- Flot -->
  <script src="{{url('public/admin_assets/vendors/Flot/jquery.flot.js')}}"></script>
  <script src="{{url('public/admin_assets/vendors/Flot/jquery.flot.pie.js')}}"></script>
  <script src="{{url('public/admin_assets/vendors/Flot/jquery.flot.time.js')}}"></script>
  <script src="{{url('public/admin_assets/vendors/Flot/jquery.flot.stack.js')}}"></script>
  <script src="{{url('public/admin_assets/vendors/Flot/jquery.flot.resize.js')}}"></script>
  <!-- Flot plugins -->
  <script src="{{url('public/admin_assets/vendors/flot.orderbars/js/jquery.flot.orderBars.js')}}"></script>
  <script src="{{url('public/admin_assets/vendors/flot-spline/js/jquery.flot.spline.min.js')}}"></script>
  <script src="{{url('public/admin_assets/vendors/flot.curvedlines/curvedLines.js')}}"></script>
  <!-- DateJS -->
  <script src="{{url('public/admin_assets/vendors/DateJS/build/date.js')}}"></script>
  <!-- bootstrap-daterangepicker -->
  <script src="{{url('public/admin_assets/vendors/moment/min/moment.min.js')}}"></script>
  <script src="{{url('public/admin_assets/vendors/bootstrap-daterangepicker/daterangepicker.js')}}"></script> 
  <!-- Custom Theme Scripts -->
  
  <script src="{{url('public/admin_assets/vendors/jquery.tagsinput/src/jquery.tagsinput.js')}}"></script>
  <script src="{{url('public/admin_assets/build/js/custom.min.js')}}"></script>

  <!-- Data Tables -->
  <script src="{{url('public/admin_assets/vendors/datatables.net/js/jquery.dataTables.min.js')}}"></script>
  <script src="{{url('public/admin_assets/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>
  <script src="{{url('public/admin_assets/vendors/datatables.net-buttons/js/dataTables.buttons.min.js')}}"></script>
  <script src="{{url('public/admin_assets/vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js')}}"></script>
  <script src="{{url('public/admin_assets/vendors/datatables.net-buttons/js/buttons.flash.min.js')}}"></script>
  <script src="{{url('public/admin_assets/vendors/datatables.net-buttons/js/buttons.html5.min.js')}}"></script>
  <script src="{{url('public/admin_assets/vendors/datatables.net-buttons/js/buttons.print.min.js')}}"></script>
  <script src="{{url('public/admin_assets/vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js')}}"></script>
  <script src="{{url('public/admin_assets/vendors/datatables.net-keytable/js/dataTables.keyTable.min.js')}}"></script>
  <script src="{{url('public/admin_assets/vendors/datatables.net-responsive/js/dataTables.responsive.min.js')}}"></script>
  <script src="{{url('public/admin_assets/vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js')}}"></script>
  <script src="{{url('public/admin_assets/vendors/datatables.net-scroller/js/dataTables.scroller.min.js')}}"></script>
  <script src="{{url('public/admin_assets/vendors/jszip/dist/jszip.min.js')}}"></script>
  
  
@include('AdminSite.alerts') 
</body>

</html>
<script type="text/javascript">
  $('#myModal').on('shown.bs.modal', function () {
    $('#myInput').trigger('focus')
  }) 
</script>

