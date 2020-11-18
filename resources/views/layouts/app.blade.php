<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- plugins:css -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.css">
    <link rel="stylesheet" href="{{ asset('theme/purpleadmin/assets/vendors/mdi/css/materialdesignicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('theme/purpleadmin/assets/vendors/css/vendor.bundle.base.css') }}">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="{{ asset('theme/purpleadmin/assets/css/style.css') }}">
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" crossorigin="anonymous"></script>
    <!-- End layout styles -->
    <link rel="shortcut icon" href="{{ asset('theme/purpleadmin/assets/images/favicon.ico') }}"/>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

</head>
<body>
<div class="container-scroller">
    <!-- partial:../../partials/_navbar.html -->
@include('layouts.partials.navbar')
<!-- partial -->
    <div class="container-fluid page-body-wrapper">
        <!-- partial:../../partials/_sidebar.html -->
    @include('layouts.partials.sidebar')
    <!-- partial -->
        @yield('content')
        <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
</div>
<!-- container-scroller -->
<!-- plugins:js -->
<script src="{{ asset('theme/purpleadmin/assets/vendors/js/vendor.bundle.base.js') }}"></script>
<script src="{{ asset('theme/purpleadmin/assets/js/off-canvas.js') }}"></script>
<script src="{{ asset('theme/purpleadmin/assets/js/hoverable-collapse.js') }}"></script>
<script src="{{ asset('theme/purpleadmin/assets/js/misc.js') }}"></script>
<script src="{{ asset('theme/purpleadmin/assets/js/file-upload.js') }}"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.js" defer></script>
@include('sweetalert::alert', ['cdn' => "https://cdn.jsdelivr.net/npm/sweetalert2@9"])
<script src="{{ asset('js/app.js') }}"></script>
@yield('scripts')
</body>
</html>
