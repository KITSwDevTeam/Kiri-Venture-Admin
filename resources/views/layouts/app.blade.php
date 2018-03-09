<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    @stack('styles')

    <!-- Styles -->
    <link rel="stylesheet" href="{{asset('fonts/open-sans/style.min.css')}}">
    <link rel="stylesheet" href="{{asset('fonts/iconfont/iconfont.css')}}">
    <link rel="stylesheet" href="{{asset('vendor/flatpickr/flatpickr.min.css')}}">
    <link rel="stylesheet" href="{{asset('vendor/select2/css/select2.min.css')}}">
    <link rel="stylesheet" href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.min.css')}}" id="stylesheet">
    <link rel="stylesheet" href="{{asset('css/custom.css')}}">

    <!-- IE Script -->
    <script src="{{asset('js/ie.assign.fix.min.js')}}"></script>

</head>
<body class="js-loading">

    <div class="preloader">
        <div class="loader">
            <span class="loader__indicator"></span>
        </div>
    </div>

    <div class="navbar navbar-light navbar-expand-lg">
        <button class="sidebar-toggler" type="button">
            <span class="iconfont iconfont-sidebar-open sidebar-toggler__open"></span>
            <span class="iconfont iconfont-alert-close sidebar-toggler__close"></span>
        </button>

        <a class="navbar-brand" href="/"><h2>Kiriventure</h2></a>
        <a class="navbar-brand-sm" href="/"><h3>Kiriventure</h3></a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-collapse">
            <span class="iconfont iconfont-navbar-open navbar-toggler__open"></span>
            <span class="iconfont iconfont-alert-close navbar-toggler__close"></span>
        </button>

    </div>

    <div class="page-wrap">
        @yield('sidenav')

        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="{{asset('vendor/echarts/echarts.min.js')}}"></script>
    <script src="{{asset('vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('vendor/popper/popper.min.js')}}"></script>
    <script src="{{asset('vendor/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('vendor/select2/js/select2.full.min.js')}}"></script>
    <script src="{{asset('vendor/simplebar/simplebar.js')}}"></script>
    <script src="{{asset('vendor/text-avatar/jquery.textavatar.js')}}"></script>
    <script src="{{asset('vendor/flatpickr/flatpickr.min.js')}}"></script>
    <script src="{{asset('vendor/wnumb/wNumb.js')}}"></script>
    <script src="{{asset('js/main.js')}}"></script>

    <script src="{{asset('vendor/sparkline/jquery.sparkline.min.js')}}"></script>
    <script src="{{asset('js/preview/sales-dashboard.js')}}"></script>

    @stack('scripts')

</body>
</html>
