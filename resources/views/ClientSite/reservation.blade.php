@extends('ClientSite.master')
@section('content')
<div id="wrapper">
    <div class="content">
        <!--=============== parallax section  ===============-->
        <section class="parallax-section header-section">
            <div class="bg bg-parallax" style="background-image:url({{url('public/Client_Assests/images/bg/08.jpg')}}" data-top-bottom="transform: translateY(300px);" data-bottom-top="transform: translateY(-300px);"></div>
            <div class="overlay"></div>
            <div class="container">
                <h2>Make online Reservation</h2>
                <h3>Booking a table online is easy</h3>
            </div>
        </section>
        <!--section end-->
        <!--=============== reservation ===============-->
        <section id="menu-sec">
            <div class="triangle-decor"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-title">
                            <h4 class="colr-gold">Reservation info</h4>
                            <div class="separator color-separator"></div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="inner">
                                    <p> TOP NOTCH restaurant are committed to providing you with an exceptional dining experience every time you walk through our doors.</p>
                                </div>
                            </div>
                        </div>
                        <div class="bold-separator">
                            <span></span>
                        </div>
                        <div class="reservation-form-holder">
                            <div class="reservation-form">
                                <div id="message"></div>
                                <form method="post" action="{{url('do-reservation')}}" name="reservationform" id="reservation-form">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-1"></div>
                                        <div class="col-12 col-md-5">
                                            <h3 class="colr-gold">Contact Details</h3>
                                            <!--name-->
                                            <input name="rev_name" type="text" id="name"  placeholder="Enter Name Here" required="required">
                                            <!--mail-->
                                            <input name="rev_email" type="email" id="email" placeholder="E-mail" required="required">
                                            <!--phone-->
                                            <input name="rev_phone" type="number" id="phone" placeholder="Phone" required="required">
                                            <!--message-->
                                          <!--   <textarea name="comments"  id="comments" onClick="this.select()" >Message</textarea> -->
                                        </div>

                                        <div class="col-12 col-md-5">
                                            <h3 class="colr-gold">Book a table</h3>
                                            <!--date-->
                                            <input  type="date" name="date" id="Mydate" value="Date"  required="required">
                                            <!--time-->
                                            <select id="restime" name="restime" required="required" class="form-control">
                                                <option value="" hidden>Select Time</option>
                                                <option value="5:00pm">5:00 pm</option>
                                                <option value="5:30pm">5:30 pm</option>
                                                <option value="6:00pm">6:00 pm</option>
                                                <option value="6:30pm">6:30 pm</option>
                                                <option value="7:00pm">7:00 pm</option>
                                                <option value="7:30pm">7:30 pm</option>
                                                <option value="8:00pm">8:00 pm</option>
                                                <option value="8:30pm">8:30 pm</option>
                                                <option value="9:00pm">9:00 pm</option>
                                                <option value="9:30pm">9:30 pm</option>
                                                <option value="10:00pm">10:00 pm</option>
                                                <option value="10:30pm">10:30 pm</option>
                                                <option value="11:00pm">11:00 pm</option>
                                                <option value="11:30pm">11:30 pm</option>
                                                 <option value="12:00am">12:00 am</option>
                                                  <option value="12:30am">12:30 am</option>
                                                   <option value="1:00am">1:00 am</option>
                                            </select>
                                            <!--restaurant-->
                                           <!--  <select class="form-control" id="resrest" onClick="this.select()">
                                                <option value="Lambert - New York City">Lambert  - New York City</option>
                                                <option value="Lambert - Washington">Lambert - Washington</option>
                                                <option value="Lambert - Florida ">Lambert - Florida</option>
                                            </select> -->
                                            <!--person-->
                                            <select required id="resperson" required class="form-control" name="res_person" onchange="input_view(this.value);">
                                                <option value="" hidden>Select Person</option>
                                                <option value="1">1 Person</option>
                                                <option value="2">2 People</option>
                                                <option value="3">3 People</option>
                                                <option value="4">4 People</option>
                                                <option value="5">5 People</option>
                                                <option value="other">other</option>
                                            </select>
                                            <div class="new_field"></div>
                                        </div>
                                        
                                    </div>
                                    <button type="submit" id="submit-res">Make a reservation</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--section end-->

    </div>
    <script>
        function input_view(x) {

        if(x=="other"){
            $(".new_field").html('<input type="text" required  name="res_person1" id="other_seats" placeholder="Enter Number of persons" style="color: #bda86c;">');
            }else{
            $(".new_field").html('');
            }
        }

        document.getElementById("Mydate").min = new Date().getFullYear() + "-" +  parseInt(new Date().getMonth() + 1 ) + "-" + new Date().getDate()

        
    </script>
     @endsection