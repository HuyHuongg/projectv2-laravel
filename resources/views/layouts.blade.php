<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Meta Tags For Seo + Page Optimization -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Themes Industry">
    <!-- description -->
    <meta name="description" content="Product is a highly creative, modern, visually stunning and Bootstrap responsive multipurpose agency and HTML5 template with 14 ready home page demos.">
    <!-- keywords -->
    <meta name="keywords" content="creative, modern, clean, bootstrap responsive, html5, css3, portfolio, blog, agency, templates, multipurpose, one page, corporate, start-up, studio, branding, designer, freelancer, carousel, parallax, photography, personal, masonry, grid, faq">
    <!-- Page Title -->
    <title>Product MegaOne</title>
    <!-- Favicon -->
    <link rel="stylesheet" href="{{ asset('css/fe/favicon.ico') }}">
    <!-- Bundle -->
    <link rel="stylesheet" href="{{ asset('css/fe/bundle.min.css') }}">
    <!-- Plugin Css -->
    <link rel="stylesheet" href="{{ asset('css/fe/jquery.fancybox.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/fe/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/fe/swiper.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/fe/cubeportfolio.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/fe/wow.css') }}">
    <link rel="stylesheet" href="{{ asset('css/fe/LineIcons.min.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ asset('css/fe/leaflet.css') }}">
    <link rel="stylesheet" href="css/fe/LineIcons.min.css">
    
    <!-- Custom Css  -->
    <link rel="stylesheet" href="{{asset('css/fe/LineIcons.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/fe/style.css')}}">
</head>
<body class="page-body">

    <div id="loader">
        <div class="loader center-block">
            <div class="inner one"></div>
            <div class="inner two"></div>
            <div class="inner three"></div>
        </div>
    </div>
    <!--END PAGE LOADER-->
    
    <!--START MODEL WINDOW LOADER-->
    <div id="model-loader" class="center-block">
        <div class="loader center-block">
            <div class="inner one"></div>
            <div class="inner two"></div>
            <div class="inner three"></div>
        </div>
    </div>
    @yield('content')
    <script src="{{ asset('js/bundle.min.js') }}"></script>
<!-- Plugin Js -->
<script src="{{ asset('js/jquery.fancybox.min.js') }}"></script>
<script src="{{ asset('js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('js/swiper.min.js') }}"></script>
<script src="{{ asset('js/jquery.cubeportfolio.min.js') }}"></script>
<script src="{{ asset('js/wow.min.js') }}"></script>
<script src="{{ asset('js/bootstrap-input-spinner.js') }}"></script>
<script src="{{ asset('js/parallaxie.min.js') }}"></script>
<!-- Custom Script -->
<script src="{{ asset('js/script.js') }}"></script>
<script src="{{ asset('js/leaflet.js') }}"></script>

<script src="{{ asset('js/map.js') }}"></script>
</body>
</html>