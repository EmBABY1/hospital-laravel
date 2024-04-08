<!DOCTYPE html>
<html>

<head>
    <title> Unity Hospital | Login </title>


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

    <!-- CSS Customization -->
    <link rel="stylesheet" href="assets/css/custom.css">

</head>

<body>
    @extends('master')
    @section('content')
        <!-- title -->

        <div style="text-align: center; margin-top: 50px;">
            <h2>LOGIN</h2>
        </div>
        <!--  title  -->


        <!--=== Content Part ===-->
        <div class="container content">
            <div class="row">
                <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3">
                    <form class="reg-page">
                        <div class="reg-header">
                            <h2>Login to your account</h2>
                        </div>

                        <div class="input-group " style="margin-bottom: 20px;">
                            <span class="input-group-addon"><i class="fa fa-user"></i></span>
                            <input type="Email" name="userid" placeholder="Email Address" class="form-control"
                                required="">
                        </div>
                        <div class="input-group " style="margin-bottom: 20px;">
                            <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                            <input type="password" name="usrpsw" placeholder="Password" class="form-control"
                                required="">
                        </div>

                        <div class="row">
                            <div class="col-md-6 checkbox">
                                <label><input type="checkbox"> Stay signed in</label>
                            </div>
                            <div class="col-md-6">
                                <button class="btn-u pull-right" type="submit" onclick="userlogin(form)">Login</button>
                            </div>
                        </div>

                        <hr>

                        <h4>Forget your Password ?</h4>
                        <p>no worries, <a class="color-green" href="#">click here</a> to reset your password.</p>
                    </form>
                </div>
            </div><!--/row-->
        </div><!--/container-->
        <!--=== End Content Part ===-->


        </div><!--/wrapper-->

        <!-- Login Javascript -->
        <script type="text/javascript" src="assets/plugins/jquery/validation.js"></script>
    @endsection
</body>

</html>
