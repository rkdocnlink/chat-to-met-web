<!DOCTYPE html>
<html lang="en">
    @include('components.head')
<body>
<div class="container-scroller">
    @include('components.header')
    <!-- partial:partials/_horizontal-navbar.html -->
    @include('components.navbar')
    @include('components.bottom-navbar')
    <!-- partial -->
    @yield('content')
    <!-- content-wrapper ends -->
    <!-- partial:partials/_footer.html -->
	@include('components.footer')
	<!-- partial -->
</div>

<!-- main-panel ends -->
<!-- page-body-wrapper ends -->
<!-- container-scroller -->
<!-- base:js -->
<script src="{{URL::asset('assets/vendors/base/vendor.bundle.base.js')}}"></script>
<!-- endinject -->
<!-- Plugin js for this page-->
<!-- End plugin js for this page-->
<!-- inject:js -->
<script src="{{URL::asset('assets/js/template.js')}}"></script>
<!-- endinject -->
<!-- plugin js for this page -->
<!-- End plugin js for this page -->
<script src="{{URL::asset('assets/vendors/chart.js/Chart.min.js')}}"></script>
<script src="{{URL::asset('assets/vendors/progressbar.js/progressbar.min.js')}}"></script>
<script src="{{URL::asset('assets/vendors/chartjs-plugin-datalabels/chartjs-plugin-datalabels.js')}}"></script>
<script src="{{URL::asset('assets/vendors/justgage/raphael-2.1.4.min.js')}}"></script>
<script src="{{URL::asset('assets/vendors/justgage/justgage.js')}}"></script>
<script src="{{URL::asset('assets/js/jquery.cookie.js')}}" type="text/javascript"></script>
<!-- Custom js for this page-->
<script src="{{URL::asset('assets/js/dashboard.js')}}"></script>
<!-- End custom js for this page-->
</body>

</html>