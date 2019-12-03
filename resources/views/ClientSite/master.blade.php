<!DOCTYPE HTML>
<html lang="en">
    
    <head>
        <!--=============== basic  ===============-->
        <meta charset="UTF-8">
        <title>{{ $page_title }}</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <meta name="robots" content="index, follow"/>
        <meta name="keywords" content="{{ $meta_keyword }}"/>
        <meta name="description" content="{{ $meta_descri }}"/>

        <!--=============== css  ===============-->
        <link type="text/css" rel="stylesheet" href="{{url('public/Client_Assests/css/reset.css')}}">
        <link type="text/css" rel="stylesheet" href="{{url('public/Client_Assests/css/plugins.css')}}">
        <link type="text/css" rel="stylesheet" href="{{url('public/Client_Assests/css/style.css')}}">
        <link type="text/css" rel="stylesheet" href="{{url('public/Client_Assests/css/color.css')}}">
        <link type="text/css" rel="stylesheet" href="{{url('public/Client_Assests/css/main.css')}}">
        <!--=============== favicons ===============-->
        <link rel="shortcut icon" href="http://www.demo.topnotchlahore.com/public/Client_Assests/images/favicon.ico">

                <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-151005827-1"></script>
        <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());

          gtag('config', 'UA-151005827-1');
        </script>

    </head>
    <body>
        <div class="loader"><img src="{{url('public/Client_Assests/images/top-notch-logo.png')}}" alt=""></div>
        <!--================= main start ================-->
        <div id="main">
            <!--=============== header ===============-->
            <header>
                <div class="header-inner">
                    <div class="container">
                        <!--navigation social links-->
                        <div class="nav-social">
                            <ul>
                                <li><a href="https://www.facebook.com/topnotchlahore/" target="_blank"><i class="fa fa-facebook"></i></a></li>
<!--                                 <li><a href="#" target="_blank"><i class="fa fa-twitter"></i></a></li> -->
                                <li><a href="https://www.instagram.com/topnotchlahore/" target="_blank"><i class="fa fa-instagram"></i></a></li>
                                <li><a href="#" target="_blank"><i class="fa fa-youtube" style="width:15px"></i></a></li>
<!--                                 <li><a href="#" target="_blank"><i class="fa fa-pinterest"></i></a></li>
<li><a href="#" target="_blank"><i class="fa fa-tumblr"></i></a></li> -->
                            </ul>
                        </div>
                        <!--logo-->
                        <div class="logo-holder">
                            <a href="{{url('/')}}">
                                <img src="{{url('public/Client_Assests/images/top-notch-logo.png')}}" class="respimg logo-vis" alt="" style="width: 125%">
                                <img src="{{url('public/Client_Assests/images/top-notch-logo.png')}}" class="respimg logo-notvis" alt="" style="width: 125%">
                        
                            </a>
                        </div>
                        <!--Navigation -->
                        <div class="nav-holder">
                            <nav>
                                <ul>
                                    <li><a href="{{url('/')}}">Home</a>
                                   
                                   <!--  <ul>
                                        <li><a href="#">Drop down </a></li>
                                        <li><a href="#">Drop down </a></li>
                                        <li><a href="#">Drop down </a></li>
                                        <li><a href="#">Drop down </a></li>
                                    </ul> -->
                                </li>
                                <li><a href="{{url('Reservation')}}">Reservation</a></li>
                                <li><a href="{{url('Menu')}}">Menu</a></li>
                                <li><a href="{{url('kitchen-garden')}}">Kitchen Garden</a></li>
                                <li><a href="{{url('about-us')}}">About</a></li>
                                <li><a href="{{url('Contact-Us')}}">Contact</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </header>
        <!--header end-->

        @yield('content')
        
        <!--content end-->
        <!--=============== footer ===============-->
        <footer id="my-foot">
            <div class="footer-inner">
                <div class="container">
                    
                   <!--  <div class="bold-separator">
                        <span></span>
                    </div> -->
                    <!--footer contacts links -->
                    <ul class="footer-contacts">
                        <li><a href="#" class="gold">{{$about->org_number}}</a></li>
                        <li><a href="#" class="gold">{{$about->org_address}}</a></li>
                        <li><a href="#" class="gold">{{$about->org_email}}</a></li>
                    </ul>
                </div>
            </div>
            <!--to top / privacy policy-->
            <div class="to-top-holder">
                <div class="container">
                    <p> <span> &#169; TopNotchLahore 2019 . </span> All rights reserved.</p>
                    <div class="to-top"><span>Back To Top </span><i class="fa fa-angle-double-up"></i></div>
                </div>
            </div>
        </footer>
        <!--footer end -->
    </div>
    <!-- wrapper end -->
</div>
<!-- Main end -->
<!-- bootstrap -->
<style type="text/css">
    .gold{
        color: #C59D5F !important;
    }
    .white{
        color: white !important;
    }
</style>


 <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<!--=============== scripts  ===============-->
<script type="text/javascript" src="{{url('public/Client_Assests/js/map.js')}}"></script>
<script type="text/javascript" src="{{url('public/Client_Assests/js/jquery.min.js')}}"></script>
<script type="text/javascript" src="{{url('public/Client_Assests/js/plugins.js')}}"></script>
<script type="text/javascript" src="{{url('public/Client_Assests/js/scripts.js')}}"></script>
 @include('AdminSite.alerts') 
</body>

</html>