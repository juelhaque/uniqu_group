<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Unique Group</title>
    <link rel="stylesheet" href="{{ asset('front_assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('front_assets/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('front_assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('front_assets/css/magnific-popup.min.css') }}">
    <link rel="stylesheet" href="{{ asset('front_assets/css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('front_assets/css/boxicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('front_assets/css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('front_assets/css/meanmenu.min.css') }}">
    <link rel="stylesheet" href="{{ asset('front_assets/css/nice-select.min.css') }}">
    <link rel="stylesheet" href="{{ asset('front_assets/css/odometer.min.css') }}">
    <link rel="stylesheet" href="{{ asset('front_assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('front_assets/css/responsive.css') }}">
    <link rel="stylesheet" href="{{ asset('front_assets/css/lightbox.css') }}">
    <link rel="icon" type="image/png" href="{{ asset('front_assets/img/logo.gif') }}">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>
    <!-- Start Preloader Area -->
    <!-- <div class="preloader">
  <div class="lds-ripple">
   <div></div>
   <div></div>
  </div>
 </div> -->
    <!-- End Preloader Area -->

    @include('frontend.layouts.header')

    @yield('content')

    @include('frontend.layouts.footer')

    <!-- Start Go Top Area -->
    <div class="go-top">
        <i class='bx bx-chevrons-up'></i>
        <i class='bx bx-chevrons-up'></i>
    </div>
    <!-- End Go Top Area -->

    <!-- Jquery Min JS -->
    <script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    {{-- <script src="{{ asset('front_assets/js/jquery.min.js') }}"></script> --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="{{ asset('front_assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('front_assets/js/meanmenu.min.js') }}"></script>
    <script src="{{ asset('front_assets/js/wow.min.js') }}"></script>
    <script src="{{ asset('front_assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('front_assets/js/magnific-popup.min.js') }}"></script>
    <script src="{{ asset('front_assets/js/nice-select.min.js') }}"></script>
    <script src="{{ asset('front_assets/js/jarallax.min.js') }}"></script>
    <script src="{{ asset('front_assets/js') }}/mixitup.min.js"></script>
    <script src="{{ asset('front_assets/js') }}/appear.min.js"></script>
    <script src="{{ asset('front_assets/js') }}/odometer.min.js"></script>
    <script src="{{ asset('front_assets/js') }}/ajaxchimp.min.js"></script>
    <script src="{{ asset('front_assets/js') }}/form-validator.min.js"></script>
    <script src="{{ asset('front_assets/js') }}/contact-form-script.js"></script>
    <script src="{{ asset('front_assets/js') }}/custom.js"></script>
    <script src="{{ asset('front_assets/js') }}/lightbox.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <script>
        AOS.init();
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    </script>
    <script>
        AOS.init();
    </script>

    @stack('webjs')
</body>

</html>
