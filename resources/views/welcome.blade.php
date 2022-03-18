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
        <div id="app">
            {{-- <example-component></example-component> --}}
            <home-component></home-component>
        </div>
    </body>
    <script src="{{ mix('/js/app.js') }}"></script>
    <script src="{{ asset('assets/js/jquery-3.5.1.min.js')}}"></script>
    <script src="{{ asset('assets/js/theme.js')}}"></script>
    <script src="{{ asset('assets/js/google-maps.js')}}"></script>
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
</html>
