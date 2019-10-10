@extends('ClientSite.master')
@section('content')

            <div id="wrapper">
                <div class="content">
                    <section class="parallax-section header-section">
                        <div class="bg bg-parallax" style="background-image:url(public/Client_Assests/images/contact1.jpg)" data-top-bottom="transform: translateY(300px);" data-bottom-top="transform: translateY(-300px);"></div>
                        <div class="overlay"></div>
                        <div class="container">
                            <h2>Contact Us</h2>
                            <h3>Were to find us</h3>
                        </div>
                    </section>
                    <section id="menu-sec">
                        <div class="triangle-decor"></div>
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="contact-details">
                                        <h3>Contact info</h3>
                                        <p> At TOP NOTCH you're always welcome TOP NOTCH offers the perfect setting for families and friends to meet, talk and eat in a comfortable and relaxed atmosphere. </p>
<p>If you have an enquiry, feedback or want to talk to us about reservations there are a number of ways you can reach us.</p>
                                    
                                    </div>
                                </div>
                                <div class="col-lg-3"></div>
                                <div class="col-lg-3">
                                    <div class="contact-details">
                                        <h4>TopNotch  - Lahore</h4>
                                        <ul>
                                            <li><a href="{{url('Reservation')}}">Reserve A Table</a></li>
                                            <li>(+92)324 999 8787</li>
                                            <li>topnotchlahore@gmail.com</li>
                                        </ul>
                                    </div>
                                    <!-- <div class="contact-details">
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
                                </div> -->
                            </div>
                            <div class="bold-separator">
                                <span></span>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="section-title">
                                        <h3>Our location</h3>
                                        <input type="hidden" name="start" id="start" value="TopNotch, Restaurant Lahore Polo & Country Club, Eden City (Ex) Air Avenue DHA Phase 8 Lahore" />
                                        <input type="hidden" name="end" id="end" value="Euro Store DHA phase * parkview Lahore Cantt" />
                                        <!-- <button class="btn" onclick="calcROute();">Click me</button> -->

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
       var directionsService = new google.maps.DirectionsService();
        var directionsRenderer = new google.maps.DirectionsRenderer();
       
      // The location of Uluru
      var res="TopNotch, Restaurant Lahore Polo & Country Club, Eden City (Ex) Air Avenue DHA Phase 8 Lahore";
      var TopNot = {lat: 31.5083, lng: 74.4296};
      var DHA = {lat: 31.4899, lng: 74.4496};
      // The map, centered at Uluru
      var map = new google.maps.Map(
          document.getElementById('map'), {
            zoom: 16,
             // center: {lat: 41.85, lng: -87.65}
         });
      // The marker, positioned at Uluru
     //  var marker = new google.maps.Marker({
     //    position: TopNot,
     //     map: map,
     //     title:res

     // });
      directionsRenderer.setMap(map);

        var onChangeHandler = function() {
          calculateAndDisplayRoute(directionsService, directionsRenderer);
        };
         document.getElementById('start').addEventListener('change', onChangeHandler);
         document.getElementById('end').addEventListener('change', onChangeHandler);

      }
      function calculateAndDisplayRoute(directionsService, directionsRenderer) {
        var TopNot = {lat: 31.5083, lng: 74.4296};
        var DHA = {lat: 31.4899, lng: 74.4496};
        directionsService.route(
            {
              origin: {query: document.getElementById('start').value},
              destination: {query: document.getElementById('end').value},
              travelMode: 'DRIVING'
            },
            function(response, status) {
              if (status === 'OK') {
                var dir=directionsRenderer.setDirections(response);
                
              } else {
                window.alert('Directions request failed due to ' + status);
              }
              alert(dir);
            });
      }
    </script>
    <script type="text/javascript">
        // var directionsDisplay = new google maps DirectionsRenderer();
        // var directionsService = new google maps DirectionsService();
        // var map;
        // var TopNot = {lat: 31.5083, lng: 74.4296};
        //  var DHA = {lat: 31.4899, lng: 74.4496};
        // // var boudha = new google maps LatLng(27.721503, 85.362072);
        // // var hattisar = new google maps LatLng(27.711360, 85.318781);
        // var mapOptions = {
        //     zoom:14,
        //     center:boudha
        // };
        // map = new google maps Map(document.getElementById('map'),mapOptions);
        // directionsDisplay setMap(map);
        // alert("yes");

        // function calculateRoute(){
        //     var request = {
        //         origin:TopNotT,
        //         destination:DHA,
        //         travelMode:'DRIVING'
        //     };
        //     directionsService route(request, function(result, status){
        //         if(status == "ok"){
        //             directionsDisplay setDirections(result);
        //         }
        //     });
        // }

        // function calcROute(){
        //     calculateRoute();
        // }

    </script>
 
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCl7yb5tfckCeROvXkiQOOpR0bv9M_scdQ&callback=initMap"
    async defer></script>
        @endsection
