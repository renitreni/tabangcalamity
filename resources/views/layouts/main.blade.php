<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content=""/>
    <meta name="author" content=""/>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- logo -->
    <link rel="icon" type="image/x-icon" href="/theme/grayscale/assets/img/favicon.ico"/>

    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" crossorigin="anonymous"></script>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="{{ asset('theme/grayscale/css/styles.css') }}" rel="stylesheet"/>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet"/>
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet"/>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body id="page-top">
<!-- Navigation-->
<nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="{{ route('landing') }}">Tabang Calamity</a>
{{--        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"--}}
{{--                data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"--}}
{{--                aria-label="Toggle navigation">--}}
{{--            Menu--}}
{{--            <i class="fas fa-bars"></i>--}}
{{--        </button>--}}
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
{{--                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="{{ route('form') }}">Tabang Form</a></li>--}}
            </ul>
        </div>
    </div>
</nav>
<!-- Masthead-->
@yield('content')
<!-- Footer-->
<footer class="footer bg-black small text-center text-white-50">
    <div class="container">Copyright © Yaramay 2020</div>
</footer>
<!-- Bootstrap core JS-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
<!-- Third party plugin JS-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
<!-- Core theme JS-->
<script src="{{ asset('theme/grayscale/js/scripts.js') }}"></script>
@include('sweetalert::alert', ['cdn' => "https://cdn.jsdelivr.net/npm/sweetalert2@9"])
@yield('scripts')
<!--
Developer: Renier R. Trenuela II
Year developed: 2020
-->
</body>
</html>
