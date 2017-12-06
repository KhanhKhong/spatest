<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link rel="stylesheet" type="text/css" href="../../source/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="../../source/css/fonts.css">
    <link rel="stylesheet" type="text/css" href="../../source/css/animate.css">
    <link rel="stylesheet" type="text/css" href="../../source/css/bootstrap-social.css">
    <link rel="stylesheet" type="text/css" href="../../source/css/main.css">
    <link rel="stylesheet" type="text/css" href="../../source/css/slider.css">
    <link rel="stylesheet" type="text/css" href="../../source/css/slide-muti.css">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <link href="../../source/css/type-3.css" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div class="type-3">
        <div id="wrap">
            @include('front.layouts.header')
            <br><br><br><br>
            <div id="app">
                @yield('content')
            </div>
        </div>
        @include('front.layouts.footer')
    </div>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
