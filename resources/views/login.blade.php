<!DOCTYPE html> 
<html lang="en"> 
    <!-- Mirrored from
    dreamschat.dreamstechnologies.com/template-html/template2/login-email.html by HTTrack Website Copier/3.x
    [XR&CO'2014], Wed, 08 Nov 2023 05:27:00 GMT --> 
<head>
<meta charset="UTF-8"> 
<meta name="viewport" content="width=device-width, initial-scale=1"> 
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Chat to Met</title> <!-- Favicon -->
    <link rel="icon" href="{{URL::asset('assets/img/favicon.png')}}"> 
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{URL::asset('assets/css/bootstrap.min.css')}}"> 
    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="{{URL::asset('assets/plugins/fontawesome/css/fontawesome.min.css')}}"> 
    <link rel="stylesheet" href="{{URL::asset('assets/plugins/fontawesome/css/all.min.css')}}"> 
        <!-- Custom scroll CSS -->
        <link rel="stylesheet" href="{{URL::asset('assets/plugins/mcustomscroll/jquery.mCustomScrollbar.css')}}"> 
        <!-- App CSS --> 
        <link rel="stylesheet" href="{{URL::asset('assets/css/app.css')}}"> 
    </head>

    <body class="account-page"> 
        <!-- Main Wrapper --> 
        <div class="main-wrapper"> <!-- Page Content -->
        <div class="content align-items-center">

        <div class="w-100 ">
            <div class="login-left">

                <!-- Login Tab Content -->
                <div class="account-content">
                    <div class="login-header">
                        <a href="index.html">
                            <img src="{{URL::asset('assets/img/logo-full.png')}}" alt="">
                        </a>
                    </div>
                    <div class="form-col">
                        <div class="login-text-details">
                            <h3>Log in</h3>
                            <p>Login with your Data that you entered during your Registration</p>
                        </div>
                        <form action="{{route('user_login')}}" method="POST">
                            @csrf
                            <div class="form-group">
                                @if(Session::get('error'))
                                    <span class="text text-danger" role="alert">
                                    <strong>{{ Session::get('error') }}</strong>
                                    </span><br/>
                                @endif
                                <label>Your Email</label>
                                <input class="form-control form-control-lg @error('email') is-invalid @enderror " name="email" type="email">
                                @error('email')
                                <span class="text text-danger" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input class="form-control @error('password') is-invalid @enderror form-control-lg " name="password"
                                    type="password">
                                    @error('password')
                                <span class="text text-danger" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="custom-check d-flex">
                                    <input type="checkbox">Keep me logged in
                                    <span class="checkmark"></span>

                                </label>
                            </div>
                            <div class="pt-1">
                                <div class="text-center">
                                    <button class="btn newgroup_create btn-block d-block w-100"
                                        type="submit">Login</button>
                                </div>
                            </div>

                            <div class="text-center dont-have">Don’t have an account? <a
                                    href="{{route('register')}}">Signup</a></div>
                            <div class="text-center mt-3">
                                <span class="forgot-link">
                                    <a href="" class="text-end">Forgot Password ?</a>
                                </span>
                            </div>
                        </form>
                    </div>
                    <div class="back-btn-col text-center">
                        <a href=""><span><i class="fas fa-caret-left"></i></span> Back</a>
                    </div>
                </div>
                <!-- /Login Tab Content -->
            </div>
            <div class="login-right">
            </div>
        </div>

        </div>
        <!-- /Page Content -->
        </div>
        <!-- /Main Wrapper -->

        <!-- jQuery -->
        <script src="{{URL::asset('assets/js/jquery-3.6.0.min.js')}}"></script>

        <!-- Bootstrap Core JS -->
        <script src="{{URL::asset('assets/js/bootstrap.bundle.min.js')}}"></script>

        <!-- Custom Scroll JS -->
        <script src="{{URL::asset('assets/js/jquery.nicescroll.min.js')}}"></script>
        <script src="{{URL::asset('assets/plugins/mcustomscroll/jquery.mCustomScrollbar.js')}}"></script>

        <!-- Custom JS -->
        <script src="{{URL::asset('assets/js/script.js')}}"></script>

    </body>

    <!-- Mirrored from dreamschat.dreamstechnologies.com/template-html/template2/login-email.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 08 Nov 2023 05:27:04 GMT -->

    </html>