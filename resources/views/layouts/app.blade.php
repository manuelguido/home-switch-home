<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!--title>{{ config('app.name', 'App') }}</title-->

    <!-- CSS & Icon -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/mdb.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/jquery-ui.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/main.css') }}"/>
    <link rel="icon" type="image/png" href="{{ asset('img/favicon.svg') }}"/>

    <!-- Fonts -->
    <link rel="stylesheet" type="text/css" href="{{ asset('fonts/fontawesome/css/all.css') }}"/>
    <link href="https://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato|Montserrat" rel="stylesheet"> 
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    
    <!-- Scripts -->
    <script src="{{ asset('js/jquery-3.3.1.js') }}"></script>
    <script src="{{ asset('js/bootstrap.bundle.js') }}"></script>
    <script src="{{ asset('js/jquery-1.12.4.js') }}"></script>
    <script src="{{ asset('js/jquery-ui.js') }}"></script>
    <script src="{{ asset('js/mdb.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>

    <script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />

    <title>@yield('title')</title>
    
</head>
<body>

        @yield('main-content')

</body>
</html>
