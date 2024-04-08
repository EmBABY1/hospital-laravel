@extends('master')
@section('content')
    <form method="POST" action="{{ route('login') }}">
        @csrf
        <div class="container content">
            <div class="row">
                <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3">
                    <form class="reg-page">
                        <div class="reg-header">
                            <h2>Login to your account</h2>
                        </div>

                        <div class="input-group " style="margin-bottom: 20px;">
                            <span class="input-group-addon"><i class="fa fa-user"></i></span>
                            <input type="Email" name="email" placeholder="Email Address" class="form-control"
                                required="">
                            <x-input-error :messages="$errors->get('email')" class="error-message" />

                        </div>
                        <div class="input-group " style="margin-bottom: 20px;">
                            <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                            <input type="password" name="password" placeholder="Password" class="form-control"
                                required="">
                        </div>

                        <div class="row">
                            <div class="col-md-6 checkbox">
                                <label><input type="checkbox"> Stay signed in</label>
                            </div>

                            <div class="col-md-6">
                                <x-primary-button class="btn-u pull-right">
                                    {{ __('Log in') }}
                                </x-primary-button>
                            </div>
                        </div>


                        @if (Route::has('password.request'))
                            <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800"
                                href="{{ route('password.request') }}">
                                {{ __('Forgot your password?') }}
                            </a>
                        @endif
                    </form>
                </div>
            </div><!--/row-->
        </div><!--/container-->
        <!--=== End Content Part ===-->

    </form>
@endsection
