<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Hospital Management System</title>
       
        @if (Request::is('admin') || Request::is('admin/'))
               <!-- plugins:css -->
    <link rel="stylesheet" href="{{asset('adminAssets/vendors/mdi/css/materialdesignicons.min.css')}}">
    <link rel="stylesheet" href="{{asset('adminAssets/vendors/css/vendor.bundle.base.css')}}">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="{{asset('adminAssets/vendors/jvectormap/jquery-jvectormap.css')}}">
    <link rel="stylesheet" href="{{asset('adminAssets/vendors/flag-icon-css/css/flag-icon.min.css')}}">
    <link rel="stylesheet" href="{{asset('adminAssets/vendors/owl-carousel-2/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('adminAssets/vendors/owl-carousel-2/owl.theme.default.min.css')}}">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="assets/images/favicon.png" />
        @else
        <link rel="stylesheet" href="{{asset('assets/css/maicons.css')}}">
        <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.css')}}">
        <link rel="stylesheet" href="{{asset('assets/vendor/owl-carousel/css/owl.carousel.css')}}">
        <link rel="stylesheet" href="{{asset('assets/vendor/animate/animate.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/theme.css')}}">
        @endif

    </head>
    <body class="antialiased">
        @yield('content')
    
        <script src="{{ mix('/js/app.js') }}"></script>       
        @if(Request::is('admin') || Request::is('admin/'))
        
        {{-- <script src="{{ asset ('assets/js/jquery-3.5.1.min.js')}}"></script> --}}
        
         <!-- plugins:js -->
         <script src="{{asset ('adminAssets/vendors/js/vendor.bundle.base.js')}}"></script>
         <!-- endinject -->
         <!-- Plugin js for this page -->
         <script src="{{ asset('adminAssets/vendors/chart.js/Chart.min.js')}}" type="text/javascript"></script>
         <script src="{{asset('adminAssets/vendors/progressbar.js/progressbar.min.js')}}" type="text/javascript"></script>
         <script src="{{asset('adminAssets/vendors/jvectormap/jquery-jvectormap.min.js')}}"></script>
         <script src="{{asset('adminAssets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js')}}"></script>
         <script src="{{asset('adminAssets/vendors/owl-carousel-2/owl.carousel.min.js')}}"></script>
         <script src="{{asset('adminAssets/js/jquery.cookie.js')}}" type="text/javascript"></script>
         <!-- End plugin js for this page -->
         <!-- inject:js -->
         <script src="{{ asset('adminAssets/js/off-canvas.js')}}"></script>
         <script src="{{asset('adminAssets/js/hoverable-collapse.js')}}"></script>
         <script src="{{asset('adminAssets/js/misc.js')}}"></script>
         <script src="{{asset('adminAssets/js/settings.js')}}"></script>
         <script src="{{asset('adminAssets/js/todolist.js')}}"></script>
         <!-- endinject -->
         <!-- Custom js for this page -->
         <script src="{{asset('assets/js/dashboard.js')}}"></script>
         <!-- End custom js for this page -->
        
        @else
        {{-- <script src="{{ mix('/js/app.js') }}"></script> --}}
        <script src="{{ asset('assets/js/jquery-3.5.1.min.js')}}"></script>
        <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{asset('assets/vendor/owl-carousel/js/owl.carousel.min.js')}}"></script>
        <script src="{{ asset('assets/vendor/wow/wow.min.js')}}"></script>
        <script src="../assets/js/theme.js"></script>
        <script src="{{ asset('assets/js/theme.js')}}"></script>
        <script src="{{ asset('assets/js/google-maps.js')}}"></script>
        @endif        

</body>

</html>
