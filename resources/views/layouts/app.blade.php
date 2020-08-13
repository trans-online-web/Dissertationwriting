<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @yield('meta_tags')

    <title>Dissertationwriting | @yield('title')</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://cdn.jsdelivr.net/momentjs/2.13.0/moment.min.js"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!--bootstrap.min.css-->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!--bootstrap-grid.min.css-->
    <link rel="stylesheet" href="css/bootstrap-grid.min.css">
    <!--owl.carousel.min.css-->
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <!--owl.theme.default.min.css-->
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <!--magnific-popup.cs-->
    <link rel="stylesheet" href="css/animate.css">
    {{-- <!--fontawesome 5-->
    <link rel="stylesheet" href="../../../use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous" />
    <link href="https://fonts.googleapis.com/css?family=Heebo:300,400,500,700,800,900&amp;display=swap" rel="stylesheet"> --}}
    <!--style.css-->
    <link rel="stylesheet" href="css/style.css">
    <!--responsive.css-->
    <link rel="stylesheet" href="css/responsive.css">
</head>
<body>
    <div id="app">
        <!--@include('includes.nav')-->

        @yield('content')
    </div>

    <!-- Jquery.min.js-->
    <script src="js/jquery-3.3.1.min.js"></script>
    <!--bootstrap.min.js-->
    <script src="js/bootstrap.min.js"></script>
    <!--owl-carousel.min.js-->
    <script src="js/owl.carousel.min.js"></script>
    <!--wow.js-->
    <script src="js/wow.min.js"></script>
    <!--magnify-popup   -->
    <script src="js/magnify-popup.js"></script>
    <!--    modernizr.js-->
    <script src="js/modernizr.js"></script>
    <!--custom.js-->
    <script src="js/custom.js"></script>
</body>
</html>
