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
  
  
  <link rel="stylesheet" type="text/css" href="{{url('public/admin_assets/loading/loading-bar.css')}}"/>
  <script type="text/javascript" src="{{url('public/admin_assets/loading/loading-bar.js')}}"></script>
  <script type="text/javascript" src="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js"></script>
  <!-- Input Tags -->
  <link href="{{url('public/admin_assets/input_tags/css/bootstrap-tagsinput.css')}}" rel="stylesheet">
  <!-- image cropper -->
  <script src="http://demo.itsolutionstuff.com/plugin/jquery.js"></script>
  <script src="http://demo.itsolutionstuff.com/plugin/croppie.js"></script>
  <link rel="stylesheet" href="http://demo.itsolutionstuff.com/plugin/bootstrap-3.min.css">
  <link rel="stylesheet" href="http://demo.itsolutionstuff.com/plugin/croppie.css">
   <!-- Date Dropper -->
  <link href="{{url('public/admin_assets/date_dropper/css/datedropper.css')}}" rel="stylesheet">
  <link href="{{url('public/admin_assets/date_dropper/css/my-style.css')}}" rel="stylesheet">
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
  <script src="//cdn.ckeditor.com/4.11.1/basic/ckeditor.js"></script>
  <!-- JQuery Data Tables -->
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
  <!-- javascript Css notify -->
  <link rel="stylesheet" href="{{url('public/admin_assets/notify/css/notyf.min.css')}}">
  <!-- Pro Tip javaScript -->
  <link rel="stylesheet" href="//gitcdn.link/repo/wintercounter/Protip/master/protip.min.css">
  <!-- bootstrap toggle -->
  <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
  <!-- data table Responsive -->
  <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.dataTables.min.css">
    <!-- data tables-->
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
  <!-- data table Button -->
  <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.5.6/css/buttons.dataTables.min.css">
  
</head>

<body class="nav-md">
  <div class="container body">
    <div class="main_container">

      <div class="col-md-3 left_col">
        <div class="left_col scroll-view">
          <div class="navbar nav_title" style="border: 0;">
            <a href="index.html" class="site_title"><span class="fa fa-smile-o"></span> <span style="font-family: georgia regular;font-size: 20px;">TopNotch!</span></a>
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
                <li><a href=""><i class="fa fa-home"></i> Dashboard </a>
                   <!--  <ul class="nav child_menu">
                    <li><a href="{{url('admin-dashboard')}}">Dashboard</a></li>                      
                  </ul> -->
                </li>

                <!-- n -->
                <li><a><i class="fa fa-circle-o"></i> CMS <span class="fa fa-chevron-down"></span></a>

                  <ul class="nav child_menu">
                    <li><a href="{{url('view-organization')}}">Change Logo</a></li>
                     
                  

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
                <li><a href=""><i class="fa fa-bug"></i> Sign Out </a>

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
                  <li><a href="{{url('log-out')}}"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
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
  <script type="text/javascript" src="{{url('public/admin_assets/customJS/organizationJS.js')}}"></script>
  <script type="text/javascript" src="{{url('public/admin_assets/customJS/usersJS.js')}}"></script>
  <script type="text/javascript" src="{{url('public/admin_assets/customJS/mainJS.js')}}"></script>
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
  
  
  <!-- Jquery data Tables .Js -->
  <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
  <!-- jQuery -->
  <script src="{{url('public/admin_assets/input_tags/js/bootstrap-tagsinput.js')}}"></script>
  <script src="{{url('public/admin_assets/date_dropper/js/datedropper.js')}}"></script>
  <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.9"></script>
  <!-- Notify Javascript -->
  <script src="{{url('public/admin_assets/notify/js/notyf.min.js')}}"></script>
  <!-- Pro Tip javaScript -->
  <script src="//gitcdn.link/repo/wintercounter/Protip/master/protip.min.js"></script>
  <!-- bootstrap toogle -->
  <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
  <!-- data table Responsive -->
  <script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>

   <!-- data table button -->
  <script src="https://cdn.datatables.net/buttons/1.5.6/js/dataTables.buttons.min.js"></script>
     <!-- data table button -->
  <script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.flash.min.js"></script>

     <!-- data table button -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
  
     <!-- data table button -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>

     <!-- data table button -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>

  <script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.html5.min.js"></script>
     <!-- data table button -->
  <script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.print.min.js"></script>

</body>

</html>
<script type="text/javascript">
  $('#myModal').on('shown.bs.modal', function () {
    $('#myInput').trigger('focus')
  }) 
</script>

