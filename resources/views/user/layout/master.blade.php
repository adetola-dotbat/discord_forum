<!DOCTYPE html>
<html lang="en" class="dark scroll-smooth" dir="ltr">

<head>
    <meta charset="UTF-8" />
    <title>Computer Science Discord</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="Tailwind CSS Saas & Software Landing Page Template" />
    <meta name="keywords"
        content="agency, application, business, clean, creative, cryptocurrency, it solutions, modern, multipurpose, nft marketplace, portfolio, saas, software, tailwind css" />
    <meta name="author" content="Shreethemes" />
    <meta name="website" content="https://shreethemes.in/" />
    <meta name="email" content="support@shreethemes.in" />
    <meta name="version" content="1.8.0" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <!-- favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}" />

    <!-- Css -->
    <link href="{{ asset('assets/libs/tiny-slider/tiny-slider.css') }}" rel="stylesheet" />
    <!-- Main Css -->
    <link href="{{ asset('assets/libs/%40iconscout/unicons/css/line.css') }}" type="text/css" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('assets/css/icons.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/tailwind.css') }}" />

    @stack('style')
</head>

<body class="font-nunito text-base text-black dark:text-white dark:bg-slate-900">

    <!-- Start Navbar -->
    @include('user.inc.nav')
    <!--end header-->
    <!-- End Navbar -->

    @yield('content')

    <!-- Footer Start -->
    @include('user.inc.footer')

    <!--end footer-->
    <!-- Footer End -->


    <!-- Back to top -->
    <a href="#" onclick="topFunction()" id="back-to-top"
        class="back-to-top fixed hidden text-lg rounded-full z-10 bottom-5 end-5 h-9 w-9 text-center bg-indigo-600 text-white leading-9"><i
            class="uil uil-arrow-up"></i></a>
    <!-- Back to top -->



    <!-- JAVASCRIPTS -->
    <script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM="
        crossorigin="anonymous"></script>
    <script src="{{ asset('assets/libs/jarallax/jarallax.min.js') }}"></script>
    <script src="{{ asset('assets/libs/tiny-slider/min/tiny-slider.js') }}"></script>
    <script src="{{ asset('assets/libs/feather-icons/feather.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins.init.js') }}"></script>
    <script src="{{ asset('assets/js/app.js') }}"></script>

    @stack('script')
    <!-- JAVASCRIPTS -->
</body>

</html>
