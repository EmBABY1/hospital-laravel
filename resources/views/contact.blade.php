<!DOCTYPE html>
<html>

<head>
    <title> Unity Hospital | Contact Us </title>

    <!-- Web Fonts -->
    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Open+Sans:400,300,600&amp;subset=cyrillic,latin">

    <!-- CSS Global Compulsory -->
    <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">

    <!-- CSS Header and Footer -->
    <link rel="stylesheet" href="assets/css/header.css">
    <link rel="stylesheet" href="assets/css/footer.css">

    <!-- CSS Implementing Plugins -->
    <link rel="stylesheet" href="assets/plugins/line-icons-pro/styles.css">
    <link rel="stylesheet" href="assets/plugins/line-icons/line-icons.css">
    <link rel="stylesheet" href="assets/plugins/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/plugins/sky-forms-pro/skyforms/css/sky-forms.css">
    <link rel="stylesheet" href="assets/plugins/sky-forms-pro/skyforms/custom/custom-sky-forms.css">

    <!-- CSS Customization -->
    <link rel="stylesheet" href="assets/css/custom.css">

</head>

<body>
    <!--=== Header v1 ===-->



    <!-- End Topbar -->

    @extends('master')
    @section('content')
        <!--=== Content Part ===-->
        <div class="container content">
            <div class="row " style="margin-bottom: 30px;">
                <div class="col-md-9" style="margin-bottom: 30px;">
                    <div class="headline">
                        <h2>Contact Form</h2>
                    </div>


                    <form method="post" class="sky-form sky-changes-3" action="contact">
                        @csrf <fieldset>

                            <div class="row">
                                <section class="col col-6">
                                    <label class="label">Name</label>
                                    <label class="input">
                                        <i class="icon-append fa fa-user"></i>
                                        <input type="text" name="name" id="name"required>
                                    </label>
                                </section>
                                <section class="col col-6">
                                    <label class="label">E-mail</label>
                                    <label class="input">
                                        <i class="icon-append fa fa-envelope-o"></i>
                                        <input type="email" name="email" id="email"required>
                                    </label>
                                </section>
                            </div>

                            <section>
                                <label class="label">Subject</label>
                                <label class="input">
                                    <i class="icon-append fa fa-tag"></i>
                                    <input type="text" name="subject" id="subject"required>
                                </label>
                            </section>

                            <section>
                                <label class="label">Mobile Number</label>
                                <label class="input">
                                    <i class="icon-append fa fa-phone"></i>
                                    <input type="text" name="mobilenumber" id="number"required>
                                </label>
                            </section>

                            <section>
                                <label class="label">Message</label>
                                <label class="textarea">
                                    <i class="icon-append fa fa-comment"></i>
                                    <textarea rows="4" name="message" id="message"required></textarea>
                                </label>
                            </section>

                        </fieldset>
                        @php
                            global $msg;
                        @endphp




                        <footer>
                            <button type="submit" class="btn-u" action="contact"onclick="showMsg(1);">Send
                                message</button>
                        </footer>


                        <p style="font-size: 20px;color:green;margin-left:20px">
                            {{ $msg }}
                        </p>
                    </form>
                </div><!--/col-md-9-->

                <div class="col-md-3" style="margin-top: 56px;">
                    <!-- Address -->
                    <div class="headline">
                        <h2>Address</h2>
                    </div>
                    <ul class="list-unstyled who" style="margin-bottom: 30px;">
                        <li><a href="#"><i class="fa fa-home"></i>Ahmedabad, IN.</a></li>
                        <li><a href="#"><i class="fa fa-envelope"></i>unityhospital@gmail.com</a></li>
                        <li><a href="#"><i class="fa fa-phone"></i>886 666 00555</a></li>
                        <li><a href="#"><i class="fa fa-globe"></i>http://www.UnityHospital.com</a></li>
                    </ul>

                    <!-- Business Hours -->
                    <div class="headline">
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
                    <p>All healthcare facilities can be accessed here under one roof, making UNITY Hospital a one
                        point contact for all your healthcare needs.</p>
                    <ul class="list-unstyled">
                        <li><i class="fa fa-check color-green"></i> 24/7 Ambulance Support.</li>
                        <li><i class="fa fa-check color-green"></i> Eminent and Experienced Doctors.</li>
                        <li><i class="fa fa-check color-green"></i> Multiple Options For Treatment.</li>
                    </ul>
                </div><!--/col-md-3-->
            </div><!--/row-->
        </div><!--/container-->




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
    @endsection
</body>

</html>
