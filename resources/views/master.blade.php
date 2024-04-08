<!DOCTYPE html>
<html>

<style>
    .dropdown {
        align: left;
        float: left;
        overflow: hidden;
    }

    /* Dropdown button */
    .dropdown .dropbtn {
        text-align: left;
        font-size: 16px;
        border: none;
        outline: none;
        color: black;
        padding: 14px 20px;
        background-color: inherit;
        font-family: inherit;
        margin: 0;
    }

    /* Dropdown content (hidden by default) */
    .dropdown-content {
        display: none;
        position: absolute;
        background-color: #f9f9f9;
        min-width: 160px;
        box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
        z-index: 1;
    }

    /* Links inside the dropdown */
    .dropdown-content a {
        float: none;
        color: black;
        padding: 12px 16px;
        text-decoration: none;
        display: block;
        text-align: left;
    }

    /* Change color of dropdown links on hover */
    .dropdown-content a:hover {
        background-color: #ddd;
    }

    /* Show the dropdown menu on hover */
    .dropdown:hover .dropdown-content {
        display: block;
    }
</style>

<head>
    <title> Unity Hospital | Dashboard </title>

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
    <div class="wrapper">
        <!--=== Header v1 ===-->
        <div class="header-v1">
            <!-- Topbar -->
            <div class="topbar-v1">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <ul class="list-inline top-v1-contacts">
                                <li>
                                    <i class="fa fa-envelope"></i> Email: unityhospital@gmail.com
                                </li>
                                <li>
                                    <i class="fa fa-phone"></i> Contact no : 88666 00555
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!-- End Topbar -->

            <!-- Navbar -->
            <div class="navbar mega-menu" role="navigation">
                <div class="container">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="res-container">
                        <button type="button" class="navbar-toggle" data-toggle="collapse"
                            data-target=".navbar-responsive-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>

                        <div class="navbar-brand">
                            <a href="/">
                                <img src="assets/img/logo/unity_white.jpg" alt="Logo">
                            </a>
                        </div>
                    </div><!--/end responsive container-->

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse navbar-responsive-collapse">
                        <div class="res-container">
                            <ul class="nav navbar-nav">

                                <!-- Collect the nav links, forms, and other content for toggling -->


                                <!-- Dashboard  -->
                                <li class="mega-menu-fullwidth">
                                    <a href="/">
                                        HOME
                                    </a>

                                </li>
                                <!-- End Dashboard-->

                                <!-- About Us -->
                                <li class="mega-menu-fullwidth">
                                    <a href="/about">
                                        ABOUT US
                                    </a>
                                </li>
                                <!-- End About us -->

                                <!-- Doctors -->
                                <li class="mega-menu-fullwidth">
                                    <a href="/doctors">
                                        DOCTORS
                                    </a>

                                </li>
                                <!-- End Doctors -->


                                <!-- Gallery -->
                                <li class="mega-menu-fullwidth">
                                    <a href="/gallery">
                                        GALLERY
                                    </a>

                                </li>
                                <!-- End Gallery -->


                                <!-- Blog -->
                                <li class="mega-menu-fullwidth">
                                    <a href="/blog">
                                        BLOGS
                                    </a>
                                </li>
                                <!-- End Blog -->

                                <!-- Contact Us -->
                                <li class="mega-menu-fullwidth">
                                    <a href="/contact">
                                        CONTACT US
                                    </a>
                                </li>
                                <!-- End Contact us -->

                                <!-- Registration -->
                                <li class="mega-menu-fullwidth">
                                    <a href="/registration">
                                        REGISTRATION
                                    </a>
                                </li>
                                <!-- End registration -->

                                <!-- login -->
                                <li class="mega-menu-fullwidth">
                                    <a href="/login">
                                        LOGIN
                                    </a>
                                </li>
                                <!-- End login -->

                                <!-- Appointment -->
                                <li class="mega-menu-fullwidth">
                                    <a href="/appointment">
                                        BOOK APPOINTMENT
                                    </a>

                                </li>
                                <li>
                                    {{-- comment --}} @auth
                                        <div class="dropdown">
                                            <button class="dropbtn">{{ Auth::user()->name }}</button>
                                            <div class="dropdown-content">
                                                <x-dropdown-link :href="route('profile.edit')">
                                                    {{ __('Profile') }}
                                                </x-dropdown-link>
                                                <form method="POST" action="{{ route('logout') }}">
                                                    @csrf
                                                    <x-dropdown-link :href="route('logout')"
                                                        onclick="event.preventDefault();
                                                    this.closest('form').submit();">
                                                        {{ __('Log Out') }}
                                                    </x-dropdown-link>
                                                </form>
                                            </div>
                                        </div>
                                    @endauth
                                </li>
                                <!-- End Appointment -->

                            </ul>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Navbar -->



        @yield('content')

        <!--=== Footer ===-->
        <div class="footer-v1">
            <div class="footer">
                <div class="container">
                    <div class="row">
                        <!-- About -->
                        <div class="col-md-3 md-margin-bottom-40">
                            <a href="/"><img id="logo-footer" class="footer-logo"
                                    src="assets/img/logo/unity_white.jpg" alt=""></a>
                            <p>At Unity Hospital, we are convinced that 'quality' and 'lowest cost' are not mutually
                                exclusive when it comes to healthcare delivery.</p>
                            <p>Our mission is to deliver high quality, affordable healthcare services to the broader
                                population in India.</p>
                        </div><!--/col-md-3-->
                        <!-- End About -->

                        <!-- Latest -->
                        <div class="col-md-3" style="margin-bottom: 40px;">
                            <div class="posts">
                                <div class="headline">
                                    <h2>Latest Posts</h2>
                                </div>
                                <ul class="list-unstyled latest-list">
                                    <li>
                                        <a href="/blog">Incredible content</a>
                                        <small>December 16, 2020</small>
                                    </li>
                                    <li>
                                        <a href="/gallery">Latest Images</a>
                                        <small>December 16, 2020</small>
                                    </li>
                                    <li>
                                        <a href="/terms">Terms and Conditions</a>
                                        <small>December 16, 2020</small>
                                    </li>
                                </ul>
                            </div>
                        </div><!--/col-md-3-->
                        <!-- End Latest -->

                        <!-- Link List -->
                        <div class="col-md-3" style="margin-bottom: 40px;">
                            <div class="headline">
                                <h2>Useful Links</h2>
                            </div>
                            <ul class="list-unstyled link-list">
                                <li><a href="/about">About us</a><i class="fa fa-angle-right"></i></li>
                                <li><a href="/Contact">Contact us</a><i class="fa fa-angle-right"></i></li>
                                <li><a href="/appointment">Book Appointment</a><i class="fa fa-angle-right"></i>
                                </li>
                            </ul>
                        </div><!--/col-md-3-->
                        <!-- End Link List -->

                        <!-- Address -->
                        <div class="col-md-3 map-img" style="margin-bottom: 40px;">
                            <div class="headline">
                                <h2>Contact Us</h2>
                            </div>
                            <address class="md-margin-bottom-40">
                                Unity Hospital <br />
                                Ahmedabad, IN <br />
                                Phone: 886 666 00555 <br />
                                Email: unityhospital@gmail.com
                            </address>
                        </div><!--/col-md-3-->
                        <!-- End Address -->
                    </div>
                </div>
            </div><!--/footer-->

            <div class="copyright">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <p>
                                2020 &copy; All Rights Reserved.
                                <a href="/privacy">Privacy Policy</a> | <a href="/terms">Terms of Service</a>
                            </p>
                        </div>

                        <!-- Social Links -->
                        <div class="col-md-6">
                            <ul class="footer-socials list-inline">
                                <li>
                                    <a href="http://www.facebook.com" class="tooltips" data-toggle="tooltip"
                                        data-placement="top" title="" data-original-title="Facebook">
                                        <i class="fa fa-facebook"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="http://www.skype.com" class="tooltips" data-toggle="tooltip"
                                        data-placement="top" title="" data-original-title="Skype">
                                        <i class="fa fa-skype"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="http://www.googleplus.com" class="tooltips" data-toggle="tooltip"
                                        data-placement="top" title="" data-original-title="Google Plus">
                                        <i class="fa fa-google-plus"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="http://www.linkedin.com" class="tooltips" data-toggle="tooltip"
                                        data-placement="top" title="" data-original-title="Linkedin">
                                        <i class="fa fa-linkedin"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="http://www.Pinterest.com" class="tooltips" data-toggle="tooltip"
                                        data-placement="top" title="" data-original-title="Pinterest">
                                        <i class="fa fa-pinterest"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="http://www.twitter.com" class="tooltips" data-toggle="tooltip"
                                        data-placement="top" title="" data-original-title="Twitter">
                                        <i class="fa fa-twitter"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <!-- End Social Links -->
                    </div>
                </div>
            </div><!--/copyright-->
        </div>
        <!--=== End Footer ===-->
    </div><!--/wrapper-->

</body>

</html>
