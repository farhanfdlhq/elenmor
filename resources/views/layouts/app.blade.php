<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <title>@yield('title', 'Killeen – A Contemporary Portfolio for Photographers')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="author" content="weibergmedia">
    <meta name="Description" content="Killeen – A Contemporary Portfolio for Photographers" />

    <!-- CSS -->
    <link href="{{ asset('css/reset.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/contact.css') }}" rel="stylesheet">
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
    <link href="{{ asset('css/flexslider.css') }}" rel="stylesheet">
    <link href="{{ asset('css/jquery.fancybox.css') }}" rel="stylesheet">
    <link href="{{ asset('css/responsive.css') }}" rel="stylesheet">

    <!-- Fonts -->
    <link href="http://fonts.googleapis.com/css?family=Oswald:400,600,700" rel="stylesheet">
    <link href="http://fonts.googleapis.com/css?family=Lora:400,400italic,600" rel="stylesheet">

    <script src="{{ asset('js/modernizr.js') }}" type="text/javascript"></script>
    @stack('styles')
</head>

<body>
    <div id="preloader">
        <div id="status">
            <div class="parent">
                <div class="child">
                    <p class="small">loading</p>
                </div>
            </div>
        </div>
    </div>

    <div id="wrap">
        @include('partials.header')

        <div class="content-wrapper">
            @yield('content')
        </div>
    </div>

    @include('partials.footer')

    <!-- Scripts -->
    <script src="{{ asset('js/modernizr.js') }}"></script>
    <script src="{{ asset('js/jquery-1.11.2.min.js') }}"></script>
    <script src="{{ asset('js/jquery-easing-1.3.js') }}"></script>
    <script src="{{ asset('js/jquery.touchSwipe.min.js') }}"></script>
    <script src="{{ asset('js/jquery.isotope2.min.js') }}"></script>
    <script src="{{ asset('js/jquery.ba-bbq.min.js') }}"></script>
    <script src="{{ asset('js/packery-mode.pkgd.min.js') }}"></script>
    <script src="{{ asset('js/jquery.isotope.load.js') }}"></script>
    <script src="{{ asset('js/main2.js') }}"></script>
    {{-- <script src="{{ asset('js/jquery.form.js') }}"></script> --}}
    <script src="{{ asset('js/input.fields.js') }}"></script>
    <script src="{{ asset('js/preloader.js') }}"></script>
    <script src="{{ asset('js/jquery.fancybox.pack.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>

    @stack('scripts')
</body>

</html>
