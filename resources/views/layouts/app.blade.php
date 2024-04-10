<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name') }}</title>

    <!-- Google Fonts - Poppins, Karla -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Karla:300,400,500,600,700" rel="stylesheet">

    <!-- Font Awesome CSS -->
    <link href="{{ asset('vendor/fontawesome/css/all.min.css') }}" rel="stylesheet">

    <!-- Custom Font Icons -->
    <link href="{{ asset('vendor/icomoon/css/iconfont.min.css') }}" rel="stylesheet">

    <!-- Vendor CSS -->
    <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/animate/css/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/dmenu/css/menu.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/hamburgers/css/hamburgers.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/mmenu/css/mmenu.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/range-slider/css/ion.rangeSlider.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/magnific-popup/css/magnific-popup.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/float-labels/css/float-labels.min.css') }}" rel="stylesheet">

    <!-- Main CSS -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

    @livewireStyles
</head>

<body>
    <!-- Preloader -->
    <div id="preloader">
        <div data-loader="circle-side"></div>
    </div>
    <!-- Preloader End -->
    <!-- Page -->
	<div id="page">
        <!-- Header -->
        @include('partials._header')
        <!-- Header end -->

        <!-- Content -->
        @yield('content')
        <!-- Content end -->

        <!-- Footer -->
        @include('partials._footer')
        <!-- Footer end -->
    </div>
	<!-- Page End -->

	<!-- Back to top button -->
	<div id="toTop"><i class="fa fa-chevron-up"></i></div>

    @livewireScripts

    <!-- Vendor Javascript Files -->
	<script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
	<script src="{{ asset('vendor/bootstrap/js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('vendor/easing/js/easing.min.js') }}"></script>
	<script src="{{ asset('vendor/parsley/js/parsley.min.js') }}"></script>
	<script src="{{ asset('vendor/nice-select/js/jquery.nice-select.min.js') }}"></script>
	<script src="{{ asset('vendor/range-slider/js/ion.rangeSlider.min.js') }}"></script>
	<script src="{{ asset('vendor/price-format/js/jquery.priceformat.min.js') }}"></script>
	<script src="{{ asset('vendor/theia-sticky-sidebar/js/ResizeSensor.min.js') }}"></script>
	<script src="{{ asset('vendor/theia-sticky-sidebar/js/theia-sticky-sidebar.min.js') }}"></script>
	<script src="{{ asset('vendor/mmenu/js/mmenu.min.js') }}"></script>
	<script src="{{ asset('vendor/magnific-popup/js/jquery.magnific-popup.min.js') }}"></script>
	<script src="{{ asset('vendor/float-labels/js/float-labels.min.js') }}"></script>

	<!-- Main Javascript File -->
	<script src="{{ asset('js/scripts.js') }}"></script>
</body>

</html>
