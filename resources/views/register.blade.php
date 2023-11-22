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
                    <h3>Sign up</h3>
                    <!-- <p>Lets get you all setup so you can verify your oersonal account and begin setting up your Profile.
                    </p> -->
                </div>
                <form action="{{route('user_register')}}" method="POST">
                @csrf
                    <div class="form-group">
                        <label>Full Name</label>
                        <input placeholder="Full Name" value="{{old('full_name')}}" class="form-control form-control-warning   @error('full_name') is-invalid @enderror form-control-lg " name="full_name" type="text">
                   @error('full_name')
                    <span class="text text-danger" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                    </div>
                    
                    <div class="form-group">
                        <label>Email</label>
                        <input placeholder="Email" value="{{old('email')}}"  class="form-control @error('email') is-invalid @enderror form-control-lg " name="email" type="email">
                   @error('email')
                    <span class="text text-danger" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input placeholder="Password" value="{{old('password')}}" class="form-control @error('password') is-invalid @enderror form-control-lg " name="password" type="password">
                    @error('password')
                    <span class="text text-danger" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                    <div class="form-group">
                        <label>Confirm Password</label>
                        <input placeholder="Confirm Password" value="{{old('confirm_password')}}" class="form-control @error('confirm_password') is-invalid @enderror form-control-lg " name="confirm_password" type="password">
                        @error('confirm_password')
                    <span class="text text-danger" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                    </div>
                   
                    <div class="pt-1">
                        <div class="text-center">
                            <button class="btn newgroup_create btn-block d-block w-100" type="submit">Create Account</button>
                        </div>
                    </div>

                    <div class="text-center dont-have">Already have an Account? <a href="{{route('login')}}">Login</a></div>
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

<!-- Terms & Conditions -->
<div class="modal fade" id="terms">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">
                    Terms & Conditions
                </h5>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <span class="material-icons">close</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="terms-card">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Elementum vulputate facilisi eu
                        ultricies integer diam. Eu ullamcorper arcu dui, eget volutpat risus dui. Donec nulla mi neque,
                        egestas tristique non. Vel pellentesque dolor nibh scelerisque turpis. Lacus magna vestibulum,
                        quis aliquam nunc, euismod amet.</p>
                    <p>Aliquet elit sapien orci ipsum faucibus fermentum habitant. Ac quam sit leo posuere nulla
                        dignissim. In mi, velit vitae dictum ac. Suscipit orci, sit amet mi massa gravida lectus elit.
                        Auctor lorem arcu quis commodo nibh ipsum. Lectus amet, ultrices nec amet sed condimentum donec.
                    </p>
                    <p class="mb-0">Arcu sed aenean venenatis arcu in at varius. Elementum, nunc, malesuada pretium cras
                        sed praesent mi arcu urna. Erat maecenas lectus pharetra, blandit lectus.</p>
                </div>
                <div class="text-end mt-3 align-items-center">
                    <button type="button" class="btn newgroup_create mb-0 close-btn" data-bs-dismiss="modal"
                        aria-label="Close">
                        Close
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /Terms & Conditions -->

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