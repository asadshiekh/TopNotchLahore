<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{csrf_token()}}"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Top Notch | Admin-Login</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!-- Bootstrap -->
    <link href="{{url('public/admin_assets/vendors/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{url('public/admin_assets/vendors/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{url('public/admin_assets/vendors/nprogress/nprogress.css')}}" rel="stylesheet">
    <!-- Animate.css -->
    <link href="{{url('public/admin_assets/vendors/animate.css/animate.min.css')}}" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="{{url('public/admin_assets/build/css/custom.min.css')}}" rel="stylesheet">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <style type="text/css">



      .login{
        background-color: #e6e6e6 !important;
        background-size: cover;
        background-attachment: fixed;
        background-position: center;
        background-repeat: no-repeat;
      }
      .login_content{
        padding-top: 0px;
      }
      .login_content form{
        padding: 30px;
        background-color: white;
        box-shadow: 1px 1px 15px #e0e0e0;
      }
    
      .login_content form input[type=text], .login_content form input[type=email], .login_content form input[type=password]{
        padding: 20px;
        border-radius: 15px;
      }
      .login_content form input[type=submit]{
          border-radius: 15px;
      }
    </style>
  </head>

  <body class="login" style="background-color: black">
    <div>
      <div class="login_wrapper">
        <div class="container">
          <div class="row">
               <div class="animate form login_form col-sm-12 col-md-8 col-offset-md-2">
                  <section class="login_content">
                    <img src="{{url('public/admin_assets/images/tp1.png')}}" height="100px" width="250px">
                  <form  method="post" action="{{url('do-login')}}">
                    @csrf
                      <h2>Login Here</h2>
                      <p id="log_error" style="color: red;"></p>
                      <div>
                        <input type="text" class="form-control" placeholder="Enter Email" required="" name="admin_email"  id="user-name"/>
                      </div>
                      <div>
                        <input type="password" class="form-control" placeholder="Password" name="admin_password" required="" id="password"/>
                      </div>
                      <div>
                        <input type="submit" class="btn btn-default submit" value="Log in"  style="margin-left: 1px;" />
                        <a class="reset_pass" href="#">Lost your password?</a>
                      </div>

                      <div class="clearfix"></div>

                      <div class="separator">
                        

                        <div class="clearfix"></div>
                        <br />

                        <div>
                          <!-- <h1><img src="{{url('public/admin_assets/images/tp1.png')}}" height="100px" width="200px"></h1>
                          <p>© All Rights Reserved. TopNotch!. Privacy and Terms</p> -->
                        </div>
                      </div>
                    </form>
                    
                  <p>© All Rights Reserved. TopNotch!. Privacy and Terms</p>
                  </section>

               </div>
          </div>
        </div>
      
      </div>
    </div>
    @include('AdminSite.alerts') 
  </body>
</html>

