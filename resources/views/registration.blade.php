@extends('master')
@section('content')
    <!-- Image title -->

    <div style="text-align: center; margin-top: 50px;">
        <h2>REGISTER</h2>
    </div>

    <!-- End title  -->


    <!--=== Content Part ===-->
    <div class="container content">
        <div class="row">
            <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
                <form onsubmit="showMsg(0);return false;" method="post" class="reg-page">
                    <div class="reg-header">
                        <h2>Register a new account</h2>
                        <p>Already Signed Up? Click <a href="login.html" class="color-green">Sign In</a> to login your
                            account.</p>
                    </div>

                    <label>First Name</label>
                    <input type="text" class="form-control " style="margin-bottom: 20px;" required="">

                    <label>Last Name</label>
                    <input type="text" class="form-control " style="margin-bottom: 20px;" required="">

                    <label>Email Address <span class="color-red">*</span></label>
                    <input type="text" class="form-control " style="margin-bottom: 20px;" required="">

                    <div class="row">
                        <div class="col-sm-6">
                            <label>Password <span class="color-red">*</span></label>
                            <input type="password" class="form-control " style="margin-bottom: 20px;" required="">
                        </div>
                        <div class="col-sm-6">
                            <label>Confirm Password <span class="color-red">*</span></label>
                            <input type="password" class="form-control " style="margin-bottom: 20px;" required="">
                        </div>
                    </div>
                    <div class="alert alert-success successBox">
                        <button type="button" class="close" onclick="showMsg(1);">×</button>
                        <strong style="font-size: 16px;">Congratulations!</strong><span class="alert-link"> You Have
                            Successfully Registered.</span>
                    </div>

                    <hr>

                    <div class="row">
                        <div class="col-lg-6 checkbox">
                            <label>
                                <input type="checkbox" required="">
                                I read <a href="#" class="color-green">Terms and Conditions</a>
                            </label>
                        </div>
                        <div class="col-lg-6 text-right">
                            <button class="btn-u" type="submit">Register</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div><!--/container-->
    <!--=== End Content Part ===-->
@endsection
