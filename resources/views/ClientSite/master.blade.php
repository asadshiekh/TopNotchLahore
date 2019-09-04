<!DOCTYPE HTML>
<html lang="en">
    
    <!-- Mirrored from lambert.kwst.net/site/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 08 Apr 2019 21:26:29 GMT -->
    <head>
        <!--=============== basic  ===============-->
        <meta charset="UTF-8">
        <title>{{ $page_title }}</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <meta name="robots" content="index, follow"/>
        <meta name="keywords" content=""/>
        <meta name="description" content=""/>
        <!--=============== css  ===============-->
        <link type="text/css" rel="stylesheet" href="{{url('public/Client_Assests/css/reset.css')}}">
        <link type="text/css" rel="stylesheet" href="{{url('public/Client_Assests/css/plugins.css')}}">
        <link type="text/css" rel="stylesheet" href="{{url('public/Client_Assests/css/style.css')}}">
        <link type="text/css" rel="stylesheet" href="{{url('public/Client_Assests/css/color.css')}}">
        <!--=============== favicons ===============-->
        <link rel="shortcut icon" href="{{url('public/Client_Assests/images/favicon.ico')}}">
    </head>
    <body>
        <div class="loader"><img src="{{url('public/Client_Assests/images/loader.png')}}" alt=""></div>
        <!--================= main start ================-->
        <div id="main">
            <!--=============== header ===============-->
            <header>
                <div class="header-inner">
                    <div class="container">
                        <!--navigation social links-->
                        <div class="nav-social">
                            <ul>
                                <li><a href="#" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#" target="_blank"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#" target="_blank"><i class="fa fa-instagram"></i></a></li>
<!--                                 <li><a href="#" target="_blank"><i class="fa fa-pinterest"></i></a></li>
<li><a href="#" target="_blank"><i class="fa fa-tumblr"></i></a></li> -->
                            </ul>
                        </div>
                        <!--logo-->
                        <div class="logo-holder">
                            <a href="{{url('/')}}">
                                <img src="{{url('uploads/logo')}}/{{$web_logo->logo}}" class="respimg logo-vis" alt="">
                                <img src="{{url('uploads/logo')}}/{{$web_logo->logo}}" class="respimg logo-notvis" alt="">
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
                                <li><a href="{{url('Menu')}}">Menu</a></li>
                                 <li><a href="{{url('Menu')}}">Kitchen Garden</a></li>
                                <li><a href="{{url('Reservation')}}">Reservation</a></li>
                                <li><a href="#">About</a></li>
                                <li><a href="{{url('Contact-Us')}}">Contact</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </header>
        <!--header end-->

        @yield('content');
        
        <!--content end-->
        <!--=============== footer ===============-->
        <footer>
            <div class="footer-inner">
                <div class="container">
                    <div class="row">
                        <!--tiwtter-->
                        <div class="col-md-4">
                            <div class="footer-info">
                                <h4>Our twitter</h4>
                                <div class="twitter-holder">
                                    <div class="twitts">
                                        <div class="twitter-feed">
                                            <div id="twitter-feed"></div>
                                        </div>
                                    </div>
                                    <div class="customNavigation">
                                        <a class="prev-slide transition"><i class="fa fa-long-arrow-left"></i></a>
                                        <a class="twit-link transition" href="https://twitter.com/katokli3mmm" target="_blank"><i class="fa fa-twitter"></i></a>
                                        <a class="transition" href="https://twitter.com/katokli3mmm" target="_blank"><i class="fa fa-facebook"></i></a>
                                        <a class="next-slide transition"><i class="fa fa-long-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--footer social links-->
                        <div class="col-md-4">
                            <div class="footer-social">
                                <h3>Find us</h3>
                                <ul>
                                    <li><a href="#" target="_blank" ><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#" target="_blank"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#" target="_blank" ><i class="fa fa-instagram"></i></a></li>
                                   
                                </ul>
                            </div>
                        </div>
                        <!--subscribe form-->
                        <div class="col-md-4">
                            <div class="footer-info">
                                <h4>Newsletter</h4>
                                <div class="subcribe-form">
                                    <form id="subscribe">
                                        <input class="enteremail" name="email" id="subscribe-email" placeholder="Your email address.." spellcheck="false" type="text">
                                        <button type="submit" id="subscribe-button" class="subscribe-button"><i class="fa fa-envelope"></i></button>
                                        <label for="subscribe-email" class="subscribe-message"></label>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="bold-separator">
                        <span></span>
                    </div>
                    <!--footer contacts links -->
                    <ul class="footer-contacts">
                        <li><a href="#">+7(111)123456789</a></li>
                        <li><a href="#">27th Brooklyn New York, NY 10065</a></li>
                        <li><a href="#">info@TopNotchLahore.com</a></li>
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
<!--=============== google map ===============-->
<script type="text/javascript" src="{{url('public/Client_Assests/js/map.js')}}"></script>
 <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<!--=============== scripts  ===============-->
<script type="text/javascript" src="{{url('public/Client_Assests/js/jquery.min.js')}}"></script>
<script type="text/javascript" src="{{url('public/Client_Assests/js/plugins.js')}}"></script>
<script type="text/javascript" src="{{url('public/Client_Assests/js/scripts.js')}}"></script>
</body>
<!-- Mirrored from lambert.kwst.net/site/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 08 Apr 2019 21:26:31 GMT -->
</html>