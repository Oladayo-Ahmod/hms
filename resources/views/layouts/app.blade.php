@php
    use Illuminate\Support\Facades\Route;
@endphp
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Hospital Management System</title>
        <link rel="stylesheet" href="{{asset('assets/css/maicons.css')}}">
        <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.css')}}">
        <link rel="stylesheet" href="{{asset('assets/vendor/owl-carousel/css/owl.carousel.css')}}">
        <link rel="stylesheet" href="{{asset('assets/vendor/animate/animate.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/theme.css')}}">

    </head>
    <body class="antialiased">
        @yield('content')
    
       
        

</body>

@elseif(Request::is('admin'))
{{-- admin plugins --}}
<script src="adminAssets/vendors/js/vendor.bundle.base.js"></script>
<!-- endinject -->
<!-- Plugin js for this page -->
<script src="adminAssets/vendors/chart.js/Chart.min.js"></script>
<script src="adminAssets/vendors/progressbar.js/progressbar.min.js"></script>
<script src="adminAssets/vendors/jvectormap/jquery-jvectormap.min.js"></script>
<script src="adminAssets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<script src="adminAssets/vendors/owl-carousel-2/owl.carousel.min.js"></script>
<script src="adminAssets/js/jquery.cookie.js" type="text/javascript"></script>
<!-- End plugin js for this page -->
<!-- inject:js -->
<script src="adminAssets/js/off-canvas.js"></script>
<script src="adminAssets/js/hoverable-collapse.js"></script>
<script src="adminAssets/js/misc.js"></script>
<script src="adminAssets/js/settings.js"></script>
<script src="adminAssets/js/todolist.js"></script>
<!-- endinject -->
<!-- Custom js for this page -->
<script src="adminAssets/js/dashboard.js"></script>
<!-- End custom js for this page -->
@else
<script src="{{ mix('/js/app.js') }}"></script>
<script src="{{ asset('assets/js/jquery-3.5.1.min.js')}}"></script>
<script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{asset('assets/vendor/owl-carousel/js/owl.carousel.min.js')}}"></script>
<script src="{{ asset('assets/vendor/wow/wow.min.js')}}"></script>
<script src="../assets/js/theme.js"></script>
<script src="{{ asset('assets/js/theme.js')}}"></script>
<script src="{{ asset('assets/js/google-maps.js')}}"></script>
@if(Request::is('admin/'))
{{-- admin plugins --}}
<script src="adminAssets/vendors/js/vendor.bundle.base.js"></script>
<!-- endinject -->
<!-- Plugin js for this page -->
<script src="adminAssets/vendors/chart.js/Chart.min.js"></script>
<script src="adminAssets/vendors/progressbar.js/progressbar.min.js"></script>
<script src="adminAssets/vendors/jvectormap/jquery-jvectormap.min.js"></script>
<script src="adminAssets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<script src="adminAssets/vendors/owl-carousel-2/owl.carousel.min.js"></script>
<script src="adminAssets/js/jquery.cookie.js" type="text/javascript"></script>
<!-- End plugin js for this page -->
<!-- inject:js -->
<script src="adminAssets/js/off-canvas.js"></script>
<script src="adminAssets/js/hoverable-collapse.js"></script>
<script src="adminAssets/js/misc.js"></script>
<script src="adminAssets/js/settings.js"></script>
<script src="adminAssets/js/todolist.js"></script>
<!-- endinject -->
<!-- Custom js for this page -->
<script src="adminAssets/js/dashboard.js"></script>
<!-- End custom js for this page -->

@endif
</html>
