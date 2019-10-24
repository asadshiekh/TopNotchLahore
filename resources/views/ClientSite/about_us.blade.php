@extends('ClientSite.master')
@section('content')
<!--=============== wrapper ===============-->
<div id="wrapper">
    <!--=============== Hero content ===============-->


    <!--hero end-->
    <div class="content">

     <!--=============== Hero content ===============-->
                    <section class="parallax-section header-section">
                        <div class="bg bg-parallax" style="background-image:url(public/Client_Assests/images/about_us.jpg)" data-top-bottom="transform: translateY(300px);" data-bottom-top="transform: translateY(-300px);"></div>
                        <div class="overlay"></div>
                        <div class="container">
                            <h2>About Us</h2>
                            <h3>The Fine Dine Restaurant</h3>
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
                            <h3>Top Notch | Vision </h3>
                            <h4 class="decor-title">Our Story</h4>
                            <div class="separator color-separator"></div>
                        </div>
                        <p>we have a vast experience in delivering great taste and services in London, after running KHYBER PASS RESTAURANT successfully for ten years, our drive is to bring that experience and love back to Pakistan.</p>
                        <p>Top Notch is set up with a lake view in international polo grounds of Lahore. A lovely and relaxing environment for people to come and enjoy. Great care has been taken to create the magic of tranquility and serenity by keeping intact the mother nature as much as possible.Still enjoying the classic games of polo in a beautiful landscape and a scenic lake by your side
                        </p>
                        <p>We are the first ever organic inspired fine dine restaurant of Pakistan, growing the finest ingredients on site in our kitchen gardens setting the standards and trends, inspiring others to follow.We have a passion to deliver the best experience accompanied by taste and service . </p>
                        
                   
                                                
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
                                <!-- 1 -->
                                <div class="item">
                                    <img src="{{url('public/Client_Assests/images/bg/13.jpg')}}" class="respimg" alt="">
                                </div>
                                <!-- 2 -->
                                <div class="item">
                                    <img src="{{url('public/Client_Assests/images/bg/14.jpg')}}" class="respimg" alt="">
                                </div>
                                <!-- 3 -->
<!--                                 <div class="item">
                                    <img src="{{url('public/Client_Assests/images/bg/15.jpg')}}" class="respimg" alt="">
                                </div> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--=============== About 2 ===============-->
        <section class="about-section about-sec">
            <!-- triangle decoration-->
            <div class="triangle-decor">
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="single-slider-holder">
                            <div class="customNavigation">
                                <a class="next-slide transition"><i class="fa fa-angle-right"></i></a>
                                <a class="prev-slide transition"><i class="fa fa-angle-left"></i></a>
                            </div>
                            <div class="single-slider owl-carousel">
                                <!-- 1 -->
                                <div class="item">
                                    <img src="{{url('public/Client_Assests/images/slider/3.jpg')}}" class="respimg" alt="">
                                </div>
                                <!-- 2 -->
                                <div class="item">
                                    <img src="{{url('public/Client_Assests/images/slider/2.jpg')}}" class="respimg" alt="">
                                </div>
                                <!-- 3 -->
                                <div class="item">
                                    <img src="{{url('public/Client_Assests/images/slider/1.jpg')}}" class="respimg" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="section-title">
                            <h3>CEO</h3>
                            <h4 class="decor-title"></h4>
                            <div class="separator color-separator"></div>
                        </div>
                        <p>A retired army captain who decided to bring his honour, integrity and loyalty to duty in the kitchen. He has 20 years of cooking experience and managed successfully London restaurants serving a variety of cuisines.</p>

                        <p>He has now decided to serve his country by returning to Pakistan and establish his best project with his vast experience of restaurant business. 

                        </p>
                        <!-- <a href="gallery.html" class="link">View gallery</a> -->
                    </div>
                </div>
            </div>
        </section>
        <!--section end-->


                <!--=============== About sec 3 ===============-->
        <section class="about-section about-sec" id="sec1">
            <div class="container">
                <div class="row">
                    <!--about text-->
                    <div class="col-md-6">
                        <div class="section-title">
                            <h3>Serene Environment </h3>
                            <h4 class="decor-title"></h4>
                            <div class="separator color-separator"></div>
                        </div>
                        
                        <p>Top Notch is set up with a lake and international polo grounds in Lahore. A lovely and relaxing environment for people to come and enjoy. Great care has been taken to create the magic of tranquility and serenity by keeping intact the mother nature as much as possible.Still enjoying the classic games of polo in a beautiful landscape and a scenic lake by your side
                        <br>
                        <br>
                        <p>
                            Top notch has a passion for market leading services and nothing but the best food quality.At TOP NOTCH you're always welcome TOP NOTCH offers the perfect setting for families and friends to meet, talk and eat in a comfortable and relaxed atmosphere
                        </p>
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
                                <!-- 1 -->
                                <div class="item">
                                    <img src="{{url('public/Client_Assests/images/bg/13.jpg')}}" class="respimg" alt="">
                                </div>
                                <!-- 2 -->
<!--                                 <div class="item">
                                    <img src="{{url('public/Client_Assests/images/bg/14.jpg')}}" class="respimg" alt="">
                                </div> -->
                                <!-- 3 -->
<!--                                 <div class="item">
                                    <img src="{{url('public/Client_Assests/images/bg/15.jpg')}}" class="respimg" alt="">
                                </div> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


                <!--=============== About 4 ===============-->
        <section class="about-section about-sec">
            <!-- triangle decoration-->
            <div class="triangle-decor">
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="single-slider-holder">
                            <div class="customNavigation">
                                <a class="next-slide transition"><i class="fa fa-angle-right"></i></a>
                                <a class="prev-slide transition"><i class="fa fa-angle-left"></i></a>
                            </div>
                            <div class="single-slider owl-carousel">
                                <!-- 1 -->
                                <div class="item">
                                    <img src="{{url('public/Client_Assests/images/slider/3.jpg')}}" class="respimg" alt="">
                                </div>
                                <!-- 2 -->
<!--                                 <div class="item">
                                    <img src="{{url('public/Client_Assests/images/slider/2.jpg')}}" class="respimg" alt="">
                                </div> -->
                                <!-- 3 -->
<!--                                 <div class="item">
                                    <img src="{{url('public/Client_Assests/images/slider/1.jpg')}}" class="respimg" alt="">
                                </div> -->
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="section-title">
                            <h3>Manager & Chef  </h3>
                            <h4 class="decor-title">Top Notch Staff</h4>
                            <div class="separator color-separator"></div>
                        </div>
                        <p>The restaurant manager responsible for running Top Notch comes with 21 years of experience having worked for AL- AHALI (KUWAIT) , Aylanto , Gin Soy and Monal Lahore.</p>    
                        <br>
                        <br>
                        <p>The master chef has 13 years of delivering excellent and delicious international dishes. He loves and breathes food and ensures the processes / ingredients and dishes are always at the best quality. 

                        </p>
                        <!-- <a href="gallery.html" class="link">View gallery</a> -->
                    </div>
                </div>
            </div>
        </section>
        <!--section end-->

        
        <!--=============== team ===============-->
        <section id="sec3" class="about-sec">
            <div class="triangle-decor"></div>
            <div class="container">
                <div class="section-title">
                    <h3>Our Team</h3>
                    <h4>High-Class Professional Service</h4>
                    <div class="separator color-separator"></div>
                </div>
                <div class="inner">
                    <p> No one can be successful without having a fully trained, experienced and professional team. With this in mind Top Notch has a team of 40 people consisting of accredited accountants, chefs, managers and floor staff</p>
                </div>
                <div class="bold-separator">
                    <span></span>
                </div>
                <div  class="team-links">
                    <!-- member 1 link -->
                    <div class="team-item">
                        <a href="#">
                            <span class="team-details">More info</span>
                            <img src="{{url('public/Client_Assests/images/team/thumbnails/1.jpg')}}" alt="" class="respimg">
                            <span class="chefname">Andy Moore</span>
                            <span class="chefinfo">Master chef in Brooklin</span>
                        </a>
                    </div>
                    <!-- member 2 link -->
                    <div class="team-item">
                        <a href="#">
                            <span class="team-details">More info</span>
                            <img src="{{url('public/Client_Assests/images/team/thumbnails/2.jpg')}}" alt="" class="respimg">
                            <span class="chefname">Jhon Doe</span>
                            <span class="chefinfo">Master chef in Florida</span>
                        </a>
                    </div>
                    <!-- member 3 link -->
                    <div class="team-item">
                        <a href="#">
                            <span class="team-details">More info</span>
                            <img src="{{url('public/Client_Assests/images/team/thumbnails/3.jpg')}}" alt="" class="respimg">
                            <span class="chefname">Andy Moore</span>
                            <span class="chefinfo">Master chef in Bronks</span>
                        </a>
                    </div>
                    <!-- member 4 link -->
                    <div class="team-item">
                        <a href="#">
                            <span class="team-details">More info</span>
                            <img src="{{url('public/Client_Assests/images/team/thumbnails/4.jpg')}}" alt="" class="respimg">
                            <span class="chefname">Andy Moore</span>
                            <span class="chefinfo">Master chef in Maiami</span>
                        </a>
                    </div>

                </div>
            </div>
        </section>
        <!--section end-->
        <!--=============== testimonials ===============-->
        <section class="parallax-section">
            <div class="bg bg-parallax" style="background-image:url({{url('public/Client_Assests/images/bg/1.jpg')}})" data-top-bottom="transform: translateY(300px);" data-bottom-top="transform: translateY(-300px);"></div>
            <div class="overlay"></div>
            <div class="container">
                <h2>Testimonials</h2>
                <h3>What said about us</h3>
                <div class="bold-separator">
                    <span></span>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="testimonials-holder">
                            <div class="customNavigation">
                                <a class="prev-slide transition"><i class="fa fa-long-arrow-left"></i></a>
                                <a class="next-slide transition"><i class="fa fa-long-arrow-right"></i></a>
                            </div>
                            <div class="testimonials-slider owl-carousel">
                                <div class="item">
                                    <ul>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                    </ul>
                                    <p>" Numerous commentators have also referred to the supposed restaurant owner's eccentric habit of touting for custom outside his establishment, dressed in aristocratic fashion and brandishing a sword "</p>
                                    <h4><a href="https://twitter.com/katokli3mmm" target="_blank">Jone Doe</a></h4>
                                </div>
                                <div class="item">
                                    <ul>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li> <i class="fa fa-star-half"></i></li>
                                    </ul>
                                    <p>" Numerous commentators have also referred to the supposed restaurant owner's eccentric habit of touting for custom outside his establishment, dressed in aristocratic fashion and brandishing a sword "</p>
                                    <h4><a href="https://twitter.com/katokli3mmm" target="_blank">Jone Doe</a></h4>
                                </div>
                                <div class="item">
                                    <ul>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                    </ul>
                                    <p>" Numerous commentators have also referred to the supposed restaurant owner's eccentric habit of touting for custom outside his establishment, dressed in aristocratic fashion and brandishing a sword "</p>
                                    <h4><a href="https://twitter.com/katokli3mmm" target="_blank">Jone Doe</a></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="section-icon"><i class="fa fa-quote-left"></i></div>
            </div>
        </section>
        <!--section end-->
    </div>
    @endsection