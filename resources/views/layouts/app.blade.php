<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="shortcut icon" href="{{ asset('icon.ico') }}" type="image/x-icon">

    <!-- Scripts -->
    <script src="{{ asset('jquery/jquery-3.5.1.min.js') }}" defer></script>
    <script src="{{ asset('bootstrap/js/bootstrap.bundle.min.js') }}" defer></script>
    <script src="{{ asset('bootstrap/js/bootstrap.min.js') }}" defer></script>
    <script src="{{ asset('js/app.js')}}"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('fontawesome/css/all.css') }}">

    <!-- Styles -->
    <link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap.min.css')}}">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @yield('styles')
</head>
<body>
    @yield('content')
    @yield('scripts-bottom')
</body>
</html>
