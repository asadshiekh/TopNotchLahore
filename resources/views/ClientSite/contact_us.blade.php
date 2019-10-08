@extends('ClientSite.master')
@section('content')

            <div id="wrapper">
                <div class="content">
                    <section class="parallax-section header-section">
                        <div class="bg bg-parallax" style="background-image:url(public/Client_Assests/images/contact1.jpg)" data-top-bottom="transform: translateY(300px);" data-bottom-top="transform: translateY(-300px);"></div>
                        <div class="overlay"></div>
                        <div class="container">
                            <h2>Our contacts</h2>
                            <h3>Were to find us</h3>
                        </div>
                    </section>
                    <section>
                        <div class="triangle-decor"></div>
                        <div class="container">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="contact-details">
                                        <h3>Contact info</h3>
                                        <p> Numerous commentators have also referred to the supposed restaurant owner's eccentric habit of touting for custom outside his establishment, dressed in aristocratic fashion and brandishing a sword</p>
                                        <p> Numerous commentators have also referred to the supposed restaurant owner's eccentric habit of touting for custom outside his establishment, dressed in aristocratic fashion and brandishing a sword</p>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="contact-details">
                                        <h4>Lambert  - New York City</h4>
                                        <ul>
                                            <li><a href="#">27th Brooklyn New York, NY 10065</a></li>
                                            <li><a href="#">+7(111)123456789</a></li>
                                            <li><a href="#">yourmail@domain.com</a></li>
                                        </ul>
                                    </div>
                                    <div class="contact-details">
                                        <h4>Lambert - Washington</h4>
                                        <ul>
                                            <li><a href="#">27th Brooklyn New York, NY 10065</a></li>
                                            <li><a href="#">+7(111)123456789</a></li>
                                            <li><a href="#">yourmail@domain.com</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="contact-details">
                                        <h4>Lambert - Florida</h4>
                                        <ul>
                                            <li><a href="#">27th Brooklyn New York, NY 10065</a></li>
                                            <li><a href="#">+7(111)123456789</a></li>
                                            <li><a href="#">yourmail@domain.com</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="bold-separator">
                                <span></span>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="section-title">
                                        <h3>Our location</h3>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- <section class="no-padding"> -->
                        <div class="map-box">
                            <div class="map-holder" data-top-bottom="transform: translateY(300px);" data-bottom-top="transform: translateY(-300px);">
                                <div id="map">
                                    
                                </div>
                            </div>
                        </div>
                    <!-- </section> -->
                    
                    <!-- <section>
                        <div class="triangle-decor"></div>
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="section-title">
                                        <h3>Get in Touch</h3>
                                        <h4 class="decor-title">Write us</h4>
                                        <div class="separator color-separator"></div>
                                    </div>
                                    <div class="contact-form-holder">
                                        <div id="contact-form">
                                            <div id="message2"></div>
                                            <form method="post" action="http://lambert.kwst.net/site/php/contact.php" name="contactform" id="contactform">
                                                <input name="name" type="text" class="name"  onClick="this.select()" value="Name" >
                                                <input name="email" type="text" class="email" onClick="this.select()" value="E-mail" >
                                                <input name="phone" type="text" class="phone" onClick="this.select()" value="Phone" >
                                                <textarea name="comments"  class="comments" onClick="this.select()" >Message</textarea>
                                                <button type="submit"  id="submit">Send </button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section> -->
                </div>
    <style type="text/css">
    #map{
        height: 500px;
        width: 100%;

    }
    </style>
    <script>
      function initMap() {
      // The location of Uluru
      var TopNot = {lat: 31.5083, lng: 74.4296};
      // The map, centered at Uluru
      var map = new google.maps.Map(
          document.getElementById('map'), {
            zoom: 16,
             center: TopNot});
      // The marker, positioned at Uluru
      var marker = new google.maps.Marker({
        position: TopNot,
         map: map,

     });
      }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCl7yb5tfckCeROvXkiQOOpR0bv9M_scdQ&callback=initMap"
    async defer></script>
        @endsection
