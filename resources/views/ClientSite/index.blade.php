@extends('ClientSite.master')
@section('content')
            <!--=============== wrapper ===============-->
            <div id="wrapper">
                <!--=============== Hero content ===============-->
                <div class="content full-height hero-content" id="sec1">
                    <div class="fullheight-carousel-holder" data-top-bottom="transform: translateY(300px);" data-bottom-top="transform: translateY(-300px);">
                        <!-- <div class="customNavigation">
                            <a class="prev-slide transition"><i class="fa fa-long-arrow-left"></i></a>
                            <a class="next-slide transition"><i class="fa fa-long-arrow-right"></i></a>
                        </div> -->
                        <div class="row">
                            <!--=============== 1 ===============-->
                            <div class="col-12 col-md-6 full-height">
                                <div class="carousel-item">
                                    <div class="overlay"></div>
                                    <div class="bg" style="background-image: url({{url('public/Client_Assests/images/bg/long/4.jpg')}})"></div>
                                    <div class="carousel-link-holder">
                                        <h3><a href="#sec3" class="custom-scroll-link">Our menu</a></h3>
                                        <h4>Stating confidently</h4>
                                    </div>
                                </div>
                            </div>
                            <!--=============== 2 ===============-->
                            <div class="col-12 col-md-6 full-height">
                                <div class="carousel-item">
                                    <div class="overlay"></div>
                                    <div class="bg" style="background-image: url({{url('public/Client_Assests/images/bg/08.jpg')}})"></div>
                                    <div class="carousel-link-holder">
                                        <h3><a href="#sec5" class="custom-scroll-link">Reservation</a></h3>
                                        <h4 style="font-size: 18px;font-family:Georgia;">+92 3334748494 </h4>
                                    </div>
                                </div>
                            </div>
                            <!--=============== 3 ===============-->
                           <!--  <div class="item full-height">
                                <div class="carousel-item">
                                    <div class="overlay"></div>
                                    <div class="bg" style="background-image: url({{url('public/Client_Assests/images/bg/long/5.jpg')}})"></div>
                                    <div class="carousel-link-holder">
                                        <h3><a href="#sec4" class="custom-scroll-link">Gallery</a></h3>
                                        <h4> Mauris placerat</h4>
                                    </div>
                                </div>
                            </div> -->
                            <!--=============== 4 ===============-->
                           <!--  <div class="item full-height">
                                <div class="carousel-item">
                                    <div class="overlay"></div>
                                    <div class="bg" style="background-image: url({{url('public/Client_Assests/images/bg/long/4.jpg')}})"></div>
                                    <div class="carousel-link-holder">
                                        <h3><a href="shop.html">Shop</a></h3>
                                        <h4>Eleifend leo</h4>
                                    </div>
                                </div>
                            </div> -->
                            <!--=============== 5 ===============-->
                           <!--  <div class="item full-height">
                                <div class="carousel-item">
                                    <div class="overlay"></div>
                                    <div class="bg" style="background-image: url({{url('public/Client_Assests/images/bg/long/3.jpg')}})"></div>
                                    <div class="carousel-link-holder">
                                        <h3><a href="blog.html">Journal</a></h3>
                                        <h4>Stating confidently</h4>
                                    </div>
                                </div>
                            </div> -->
                        </div>
                    </div>
                    <div class="hero-link">
                        <a class="custom-scroll-link" href="#my-foot"><i class="fa fa-angle-double-down"></i></a>
                    </div>
                </div>
                <!--hero end-->
     <style type="text/css">
     	.carousel-item{
     		position: absolute !important;
     	}
     </style>
                
                <!--content end-->
                <!--=============== footer ===============-->
                @endsection