@extends('layouts.app')

@section('content')


    <!-- MAIN -->
    <div id="main">
        <div class="wrapper clearfix">


            <h2 class="page-heading"><span>CONTACT</span></h2>

            <!-- page content -->
            <div id="page-content" class="clearfix">

                <!-- Map -->
               {{-- <script type="text/javascript" src="https://maps.google.com/maps/api/js?sensor=true" /></script>
                <script type="text/javascript">
                    function initialize() {
                        var latlng = new google.maps.LatLng(-34.397, 150.644);
                        var myOptions = {
                            zoom: 8,
                            center: latlng,
                            mapTypeId: google.maps.MapTypeId.ROADMAP
                        };
                        var map = new google.maps.Map(document.getElementById("map_canvas"),
                            myOptions);
                    }
                </script>--}}

                <div id="map_canvas"></div>
                <!-- ENDS Map -->




                <div class="map-content">
                    Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper.
                </div>

                <!-- form -->

                <form id="contactForm" action="#" method="post">
                    <h2 class="heading">Contact us using this form</h2>
                    <p> Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget.</p>
                    <fieldset>
                        <div>
                            <input name="name"  id="name" type="text" class="form-poshytip" title="Enter your full name" />
                            <label>Name</label>
                        </div>
                        <div>
                            <input name="email"  id="email" type="text" class="form-poshytip" title="Enter your email address" />
                            <label>Email</label>
                        </div>
                        <div>

                            <input name="web"  id="web" type="text" class="form-poshytip" title="Enter your website" />
                            <label>Website</label>
                        </div>
                        <div>
                            <textarea  name="comments"  id="comments" rows="5" cols="20" class="form-poshytip" title="Enter your comments"></textarea>
                        </div>

                        <!-- send mail configuration -->
                        <input type="hidden" value="email@yourserver.com" name="to" id="to" />
                        <input type="hidden" value="Enter the subject here" name="subject" id="subject" />
                        <input type="hidden" value="send-mail.php" name="sendMailUrl" id="sendMailUrl" />
                        <!-- ENDS send mail configuration -->

                        <p><input type="button" value="Send" name="submit" id="submit" /> <span id="error" class="warning">Message</span></p>
                    </fieldset>

                </form>
                <p id="sent-form-msg" class="success">Form data sent. Thanks for your comments.</p>
                <!-- ENDS form -->


                <!-- contact sidebar -->
                <aside id="contact-sidebar">
                    <div class="block">
                        <h4>Address</h4>
                        <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor si tincidunt quis, accumsan porttitor, facilisis luctus, mets.</p>

                        <ul class="address-block">
                            <li class="address">Address line, city, state ZIP</li>
                            <li class="phone">+123 456 789</li>
                            <li class="mobile">+123 456 789</li>
                            <li class="email"><a href="mailto:email@server.com">email@server.com</a></li>
                        </ul>

                    </div>
                </aside>
                <div class="clearfix"></div>
                <!-- ENDS contact-sidebar -->

            </div>
            <!--  page content-->




        </div>
    </div>
    <!-- ENDS MAIN -->

    <!-- Start google map -->
    {{--<script>initialize();</script>--}}

@endsection