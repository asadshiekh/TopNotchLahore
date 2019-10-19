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
                            <h3>the Fine Dine Restaurant</h3>
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
                            <h3>Discover</h3>
                            <h4 class="decor-title">Our story</h4>
                            <div class="separator color-separator"></div>
                        </div>
                        <p>The History of Kitchens and Cooks gives further intimation on Mr Boulanger usual menu, stating confidently that "Boulanger served salted poultry and fresh eggs, all presented without a tablecloth on small marble tables". Numerous commentators have also referred to the supposed restaurant owner's eccentric habit of touting for custom outside his establishment, dressed in aristocratic fashion and brandishing a sword</p>
                        <p> Numerous commentators have also referred to the supposed restaurant owner's eccentric habit of touting for custom outside his establishment, dressed in aristocratic fashion and brandishing a sword</p>
                        <a href="menu.html" class="link ajax">Top Notch Lahore</a>
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
                                <div class="item">
                                    <img src="{{url('public/Client_Assests/images/bg/15.jpg')}}" class="respimg" alt="">
                                </div>
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
                            <h3>Our restorans</h3>
                            <h4 class="decor-title">Natoque penatibus</h4>
                            <div class="separator color-separator"></div>
                        </div>
                        <p>The History of Kitchens and Cooks gives further intimation on Mr Boulanger usual menu, stating confidently that "Boulanger served salted poultry and fresh eggs, all presented without a tablecloth on small marble tables". Numerous commentators have also referred to the supposed restaurant owner's eccentric habit of touting for custom outside his establishment, dressed in aristocratic fashion and brandishing a sword</p>
                        <p>Restaurant owner's eccentric habit of touting for custom outside his establishment, dressed in aristocratic fashion and brandishing a sword</p>
                        <a href="gallery.html" class="link">View gallery</a>
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
                    <h4>High-class professional service</h4>
                    <div class="separator color-separator"></div>
                </div>
                <div class="inner">
                    <p> Numerous commentators have also referred to the supposed restaurant owner's eccentric habit of touting for custom outside his establishment, dressed in aristocratic fashion and brandishing a sword</p>
                </div>
                <div class="bold-separator">
                    <span></span>
                </div>
                <div  class="team-links">
                    <!-- member 1 link -->
                    <div class="team-item">
                        <a href="team/mem1.html" class="popup-with-move-anim">
                            <span class="team-details">More info</span>
                            <img src="{{url('public/Client_Assests/images/team/thumbnails/1.jpg')}}" alt="" class="respimg">
                            <span class="chefname">Andy Moore</span>
                            <span class="chefinfo">Master chef in Brooklin</span>
                        </a>
                    </div>
                    <!-- member 2 link -->
                    <div class="team-item">
                        <a href="team/mem2.html" class="popup-with-move-anim">
                            <span class="team-details">More info</span>
                            <img src="{{url('public/Client_Assests/images/team/thumbnails/2.jpg')}}" alt="" class="respimg">
                            <span class="chefname">Jhon Doe</span>
                            <span class="chefinfo">Master chef in Florida</span>
                        </a>
                    </div>
                    <!-- member 3 link -->
                    <div class="team-item">
                        <a href="team/mem3.html" class="popup-with-move-anim">
                            <span class="team-details">More info</span>
                            <img src="{{url('public/Client_Assests/images/team/thumbnails/3.jpg')}}" alt="" class="respimg">
                            <span class="chefname">Andy Moore</span>
                            <span class="chefinfo">Master chef in Bronks</span>
                        </a>
                    </div>
                    <!-- member 4 link -->
                    <div class="team-item">
                        <a href="team/mem4.html" class="popup-with-move-anim">
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