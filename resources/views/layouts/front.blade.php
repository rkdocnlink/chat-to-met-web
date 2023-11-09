<!DOCTYPE html>
<html lang="en">
    @include('components.head')
<body>

<!-- Main Wrapper -->
<div class="main-wrapper">

    <!-- content -->
    <div class="content main_content">

        <!-- Left Sidebar Menu -->
        @include('components.sidebar')
        <!-- /Left Sidebar Menu -->
        @yield('content')
    </div>
</div>
<!-- /Main Wrapper -->
	
<!-- jQuery -->
<script data-cfasync="false" src="{{URL::asset('assets/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js')}}"></script>
<script src="{{URL::asset('assets/js/jquery-3.6.0.min.js')}}"></script>
    
<!-- Bootstrap Core JS -->
<script src="{{URL::asset('assets/js/bootstrap.bundle.min.js')}}"></script>

<!-- Slimscroll JS -->
<script src="{{URL::asset('assets/plugins/slimscroll/jquery.slimscroll.min.js')}}"></script>

<!-- Swiper JS -->
<script src="{{URL::asset('assets/plugins/swiper/swiper.min.js')}}"></script>

<!-- FancyBox JS -->
<script src="{{URL::asset('assets/plugins/fancybox/jquery.fancybox.min.js')}}"></script>

<!-- Custom JS -->
<script src="{{URL::asset('assets/js/script.js')}}"></script> 
	
</body>

<!-- Mirrored from dreamschat.dreamstechnologies.com/template-html/template2/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 08 Nov 2023 05:26:23 GMT -->
</html>