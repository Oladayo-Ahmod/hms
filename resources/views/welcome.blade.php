<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Hospital Management System</title>

    </head>
    <body class="antialiased">
        <div id="app">
            {{-- <example-component></example-component> --}}
            <home></home>
        </div>
    </body>
    <script src="{{ mix('/js/app.js') }}"></script>
</html>
