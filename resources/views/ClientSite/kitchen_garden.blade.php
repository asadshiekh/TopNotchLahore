@extends('ClientSite.master')
@section('content')
<!--=============== wrapper ===============-->
<div id="wrapper">
    <!--=============== Hero content ===============-->


    <!--hero end-->
    <div class="content">

     <!--=============== Hero content ===============-->
                    <section class="parallax-section header-section">
                        <div class="bg bg-parallax" style="background-image:url(public/Client_Assests/images/organic.jpg)" data-top-bottom="transform: translateY(300px);" data-bottom-top="transform: translateY(-300px);"></div>
                        <div class="overlay"></div>
                        <div class="container">
                            <h2>Top Notch Kitchen Garden</h2>
                            <h3>The Orgainc Food</h3>
                        </div>
                    </section>
                <!--hero end-->

        <!--=============== About ===============-->
        <section class="about-section about-sec" id="sec1">
            <div class="container">
                <div class="row">
                    <!--about text-->
                    <div class="col-md-6">
                        <div class="section-title">
                            <h3> Organic Food </h3>
                            <h4 class="decor-title">Take A Tour Of Kitchen Garden </h4>
                            <div class="separator color-separator"></div>
                        </div>
                        <p style="text-align: center;">First Ever Organic Inspired Restaurant Of Pakitsan with Its Kitchen Garden On Site.</p>
                        
                        
                   
                                                
                        <!-- <a href="menu.html" class="link ajax">Top Notch Lahore</a> -->
                    </div>
                    <!-- about images-->
                    <div class="col-md-6">
                        <div class="single-slider-holder">
                            <div class="customNavigation">
                                <a class="next-slide transition"><i class="fa fa-angle-right"></i></a>
                                <a class="prev-slide transition"><i class="fa fa-angle-left"></i></a>
                            </div>
                            <div class="single-slider owl-carousel">
                                <!-- 2 -->
                                <div class="item">
                                    <img src="{{url('public/Client_Assests/images/kitchen_garden/kitchen1.jpeg')}}" class="respimg" alt="vegetables organic">
                                </div>
                                <!-- 2 -->
                                <div class="item">
                                    <img src="{{url('public/Client_Assests/images/kitchen_garden/kitchen2.jpeg')}}" class="respimg" alt="fresh tomates vegetables organic ">
                                </div>
                                <!-- 3 -->
                                <div class="item">
                                    <img src="{{url('public/Client_Assests/images/kitchen_garden/kitchen3.jpeg')}}" class="respimg" alt="fresh food vegetables organic">
                                </div>
                                <!-- 4 -->
                                <div class="item">
                                    <img src="{{url('public/Client_Assests/images/kitchen_garden/kitchen4.jpeg')}}" class="respimg" alt="fresh food vegetables organic">
                                </div>
                                 <!-- 5 -->
                                <div class="item">
                                    <img src="{{url('public/Client_Assests/images/kitchen_garden/kitchen5.jpeg')}}" class="respimg" alt="fresh food vegetables organic">
                                </div>
                                <!-- 6 -->
                                <div class="item">
                                    <img src="{{url('public/Client_Assests/images/kitchen_garden/kitchen6.jpeg')}}" class="respimg" alt="fresh food vegetables organic">
                                </div>
                                <!-- 7 -->
                                <div class="item">
                                    <img src="{{url('public/Client_Assests/images/kitchen_garden/kitchen7.jpeg')}}" class="respimg" alt="fresh food vegetables organic">
                                </div>
                                <!-- 8 -->
                                <div class="item">
                                    <img src="{{url('public/Client_Assests/images/kitchen_garden/kitchen8.jpeg')}}" class="respimg" alt="fresh food vegetables organic">
                                </div>
                                <!-- 9 -->
                                <div class="item">
                                    <img src="{{url('public/Client_Assests/images/kitchen_garden/kitchen9.jpeg')}}" class="respimg" alt="fresh food vegetables organic">
                                </div>
                                <!-- 10 -->
                                <div class="item">
                                    <img src="{{url('public/Client_Assests/images/kitchen_garden/kitchen10.jpeg')}}" class="respimg" alt="fresh food vegetables organic">
                                </div>
                                <!-- 11 -->
                                <div class="item">
                                    <img src="{{url('public/Client_Assests/images/kitchen_garden/kitchen11.jpeg')}}" class="respimg" alt="fresh food vegetables organic">
                                </div>



                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>








    </div>
    @endsection