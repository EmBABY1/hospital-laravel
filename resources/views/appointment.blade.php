@extends('master')
@section('content')
    <!--=== Heading ===-->
    <div class="container content">
        <div class="row " style="margin-bottom: 30px;">
            <div class="col-md-9 " style="margin-bottom: 30px;">
                <div class="headline">
                    <h2>Appointment Form</h2>
                </div>
                @php
                    global $msg;
                @endphp
                <!--=== APPOINTMENT FORM ===-->
                <form action="appointment" method="post" class="sky-form sky-changes-3">
                    @csrf
                    <fieldset>

                        <section>
                            <label class="label">Name</label>
                            <label class="input">
                                <i class="icon-append fa fa-user"></i>
                                <input type="text" name="name" id="name" required="">
                            </label>
                        </section>



                        <section>
                            <label class="label">Purpose Of Appointment</label>
                            <label class="input">
                                <i class="icon-append fa fa-tag"></i>
                                <input type="text" name="purpose" required="">
                            </label>
                        </section>

                        <section>
                            <label class="label">Mobile Number</label>
                            <label class="input">
                                <i class="icon-append fa fa-phone"></i>
                                <input type="text" name="mobilenumber" id="number" required="">
                            </label>
                        </section>

                        <section>
                            <label class="select">
                                <select name="department" required="">
                                    <option value="" selected="" disabled="">Select Department
                                    </option>
                                    <option>Cardiology</option>
                                    <option>Dermatology and Cosmetology</option>
                                    <option>General Surgery</option>
                                    <option>Health Checkup Packages</option>
                                    <option>Neurology</option>
                                </select>
                                <i></i>
                            </label>
                        </section>
                        <div class="row">
                            <section class="col col-6">
                                <label class="date">Select Date</label>
                                <label class="input">
                                    <i class="icon-append fa fa-calendar"></i>
                                    <input type="date" required=""name="date">
                                </label>
                            </section>
                            <section class="col col-6">
                                <label class="time">Select Time</label>
                                <label class="select">
                                    <select name="time" required="">
                                        <option value="" selected="" disabled="">Select Time</option>
                                        <option>8 AM - 10 AM</option>
                                        <option>10 AM - 12 PM</option>
                                        <option>12 PM - 2 PM</option>
                                        <option>2 PM - 4 PM</option>
                                        <option>4 PM - 6 PM</option>
                                        <option>6 PM - 8 PM</option>
                                        <option>8 PM - 10 PM</option>
                                    </select>
                                    <i></i>
                                </label>
                            </section>
                        </div>
                        <div class="alert alert-success successBox">
                            <button type="button" class="close" onclick="showMsg(1);">×</button>
                            <strong style="font-size: 16px;">Congratulations!</strong><span class="alert-link">
                                Your Appointment has been booked successfully.</span>
                        </div>

                    </fieldset>

                    <footer>
                        <button type="submit" class="btn-u">Send message</button>
                    </footer>

                    <p style="font-size: 20px;color:green;margin-left:20px">
                        {{ $msg }}
                    </p>
                </form>
            </div><!--/col-md-9-->

            <!-- side part of appointment -->
            <div class="col-md-3" style="margin-top: 56px;">
                <!-- Address -->
                <div class="headline">
                    <h2>Appointment Notes</h2>
                </div>
                <p> You Only Can Book Your Appointment Between <strong>8 AM to 10 PM.</strong> </p>
                <p> In Other Times You Can Call Our Ambulance Which Is Available 24/7. </p>

                <!-- Business Hours -->
                <div class="headline" style="margin-top: 20px;">
                    <h2>Business Hours</h2>
                </div>
                <ul class="list-unstyled " style="margin-bottom: 30px;">
                    <li><strong>Monday-Saturday:</strong> 24/7 Available.</li>
                    <li><strong>Sunday:</strong> 4 AM to 11 PM.</li>
                </ul>

                <!-- Why choose us? -->
                <div class="headline">
                    <h2>Why Choose Us?</h2>
                </div>
                <p>All healthcare facilities can be accessed here under one roof, making UNITY Hospital a one point
                    contact for all your healthcare needs.</p>
                <ul class="list-unstyled">
                    <li><i class="fa fa-check color-green"></i> 24/7 Ambulance Support.</li>
                    <li><i class="fa fa-check color-green"></i> Eminent and Experienced Doctors.</li>
                    <li><i class="fa fa-check color-green"></i> Multiple Options For Treatment.</li>
                </ul>
            </div><!--/col-md-3-->
        </div><!--/row-->
    </div><!--/container-->



    </div><!--/wrapper-->

    <!-- Java scripts -->
    <script type="text/javascript" src="assets/plugins/jquery/jquery.min.js"></script>
    <script type="text/javascript">
        function showMsg(flag) {
            if (flag == 0) {
                $('.successBox').css('display', 'block');
            } else {
                $('.successBox').css('display', 'none');
            }
        }
    </script>

    </body>

    </html>
@endsection
