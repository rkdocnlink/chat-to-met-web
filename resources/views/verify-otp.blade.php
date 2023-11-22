<!DOCTYPE html> <html lang="en"> 
 <head> 
    <meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1"> <meta http-equiv="X-UA-Compatible"
    content="ie=edge"> <title>Chat to Met</title>

<link rel="icon" href="{{URL::asset('assets/img/favicon.png')}}">
<link rel="stylesheet" href="{{URL::asset('assets/css/bootstrap.min.css')}}">
<link rel="stylesheet" href="{{URL::asset('assets/plugins/fontawesome/css/fontawesome.min.css')}}">
<link rel="stylesheet" href="{{URL::asset('assets/plugins/fontawesome/css/all.min.css')}}"> <!-- Custom scroll CSS -->
<link rel="stylesheet" href="{{URL::asset('assets/plugins/mcustomscroll/jquery.mCustomScrollbar.css')}}">
<link rel="stylesheet" href="{{URL::asset('assets/css/app.css')}}"> 
</head> <body class="account-page">
<div class="main-wrapper"> <div class="content align-items-center">
  
    <div class="w-100 ">
         <div class="login-left">

        <div class="account-content">
            <div class="login-header">
                <a href="index.html">
                    <img src="{{URL::asset('assets/img/logo-full.png')}}" alt="">
                </a>
            </div>
            <div class="form-col">
                <div class="login-text-details">
                    <h3>Verify OTP</h3>
                   @if(Session::get('otp')) 
                    <p>This is your OTP {{Session::get('otp')}}</p>
                    @endif
                    
                </div>
                <form action="{{route('otp-verify-post')}}" method="POST">
                @csrf
                    <div class="form-group">
                        <label>OTP</label>
                        <input placeholder="Enter OTP" value="{{old('otp')}}" class="form-control form-control-warning   @error('otp') is-invalid @enderror form-control-lg " name="otp" type="text">
                       @error('otp')
                    <span class="text text-danger" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                    @if(Session::get('error')) 
                        <span class="text text-danger" role="alert">
                        <strong>{{ Session::get('error') }}</strong>
                        @endif
                       
                     </div>
                    <div class="pt-1">
                        <div class="text-center">
                            <button class="btn newgroup_create btn-block d-block w-100" type="submit">Click to verify</button>
                            
                        </div>
                        
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
    <div class="login-right signup-bg">
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

<!-- Mirrored from dreamschat.dreamstechnologies.com/template-html/template2/signup-email.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 08 Nov 2023 05:27:06 GMT -->

</html>