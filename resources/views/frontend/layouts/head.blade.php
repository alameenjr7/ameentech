
    <!-- Required meta tags -->
    <meta charset="utf-8">

    <meta name="description" content="{{get_setting('meta_description')}}">
    <meta name="keywords" content="{{get_setting('meta_keywords')}}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('frontend/assets/css/bootstrap.min.css')}}">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="{{asset('frontend/assets/css/animate.min.css')}}">
    <!-- Meanmenu CSS -->
    <link rel="stylesheet" href="{{asset('frontend/assets/css/meanmenu.css')}}">
    <!-- Remixicon CSS -->
    <link rel="stylesheet" href="{{asset('frontend/assets/css/remixicon.css')}}">
    <!-- Odometer CSS -->
    <link rel="stylesheet" href="{{asset('frontend/assets/css/odometer.min.css')}}">
    <!-- Nice Select CSS -->
    <link rel="stylesheet" href="{{asset('frontend/assets/css/nice-select.min.css')}}">
    <!-- Carousel CSS -->
    <link rel="stylesheet" href="{{asset('frontend/assets/css/owl.carousel.min.css')}}">
    <!-- Carousel Default CSS -->
    <link rel="stylesheet" href="{{asset('frontend/assets/css/owl.theme.default.min.css')}}">
    <!-- Magnific Popup CSS -->
    <link rel="stylesheet" href="{{asset('frontend/assets/css/magnific-popup.min.css')}}">
    <!-- Fancybox CSS -->
    <link rel="stylesheet" href="{{asset('frontend/assets/css/fancybox.min.css')}}">
    <!-- Style CSS -->
    <link rel="stylesheet" href="{{asset('frontend/assets/css/style.css')}}">
    <!-- Dark CSS -->
    <link rel="stylesheet" href="{{asset('frontend/assets/css/dark.css')}}">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="{{asset('frontend/assets/css/responsive.css')}}">

    <link rel="icon" type="image/png" href="{{asset(get_setting('favicon'))}}">

    <link rel="stylesheet" href="{{asset('backend/assets/css/plugins/toastr.css')}}">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/notyf@3/notyf.min.css">
    {{-- <link href="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/css/bootstrap4-toggle.min.css" rel="stylesheet"> --}}

    <meta name="google-site-verification" content="FhzHYoTqi3NGJlk30bFOlMkq8-tUBk5MzouXIKi6rk0" />

    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
        new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-MB5T3ZK');
    </script>
    <!-- End Google Tag Manager -->

    {{-- <title>{{ config('app.name', 'AmeenTech - Startups') }}</title> --}}
    @yield('title')

    @yield('styles')
