<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>UNUSIA – Universitas Nahdatul Ulama Indonesia </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Place favicon.ico in the root directory -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">
    <!-- CSS here -->
    <link rel="stylesheet" href="frontend/css/preloader.css">
    <link rel="stylesheet" href="frontend/css/bootstrap.min.css">
    <link rel="stylesheet" href="frontend/css/meanmenu.css">
    <link rel="stylesheet" href="frontend/css/animate.min.css">
    <link rel="stylesheet" href="frontend/css/owl.carousel.min.css">
    <link rel="stylesheet" href="frontend/css/swiper-bundle.css">
    <link rel="stylesheet" href="frontend/css/backToTop.css">
    <link rel="stylesheet" href="frontend/css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="frontend/css/fontAwesome5Pro.css">
    <link rel="stylesheet" href="frontend/css/elegantFont.css">
    <link rel="stylesheet" href="frontend/css/default.css">
    <link rel="stylesheet" href="frontend/css/style.css">
</head>

<body>
    <!--[if lte IE 9]>
      <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
      <![endif]-->

    <!-- Add your site or application content here -->

    @include('partials.header')

    {{-- panggil home --}}
    @yield('container')

    <!-- footer area start -->
    @include('partials.footer')
    <!-- footer area end -->

    <!-- JS here -->
    <script src="frontend/js/vendor/jquery-3.5.1.min.js"></script>
    <script src="frontend/js/vendor/waypoints.min.js"></script>
    <script src="frontend/js/bootstrap.bundle.min.js"></script>
    <script src="frontend/js/jquery.meanmenu.js"></script>
    <script src="frontend/js/swiper-bundle.min.js"></script>
    <script src="frontend/js/owl.carousel.min.js"></script>
    <script src="frontend/js/jquery.fancybox.min.js"></script>
    <script src="frontend/js/isotope.pkgd.min.js"></script>
    <script src="frontend/js/parallax.min.js"></script>
    <script src="frontend/js/backToTop.js"></script>
    <script src="frontend/js/jquery.counterup.min.js"></script>
    <script src="frontend/js/ajax-form.js"></script>
    <script src="frontend/js/wow.min.js"></script>
    <script src="frontend/js/imagesloaded.pkgd.min.js"></script>
    <script src="frontend/js/main.js"></script>
</body>

</html>
