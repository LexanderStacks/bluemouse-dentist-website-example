<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'FirstBioDent') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

    <!-- Scripts -->
    @vite(['resources/js/app.js'])


    <!-- --- --- --- TEMPLATE --- --- --- -->

        <!-- Bootstrap CSS
        <link rel="stylesheet" href="/template-assets/css/bootstrap.min.css">
        -->
        <!-- Animate CSS --> 
        <link rel="stylesheet" href="/template-assets/css/animate.min.css">
        <!-- Meanmenu CSS -->
        <link rel="stylesheet" href="/template-assets/css/meanmenu.css">
        <!-- Boxicons CSS -->
        <link rel="stylesheet" href="/template-assets/css/boxicons.min.css">
        <!-- Flaticon Two CSS -->
        <link rel="stylesheet" href="/template-assets/css/flaticon-two.css">
        <!-- Flaticon CSS -->
        <link rel="stylesheet" href="/template-assets/css/flaticon.css">
        <!-- Odometer CSS -->
        <link rel="stylesheet" href="/template-assets/css/odometer.min.css">
        <!-- Nice Select CSS -->
        <link rel="stylesheet" href="/template-assets/css/nice-select.min.css">
        <!-- Carousel CSS -->
        <link rel="stylesheet" href="/template-assets/css/owl.carousel.min.css">
        <!-- Carousel Default CSS -->
        <link rel="stylesheet" href="/template-assets/css/owl.theme.default.min.css">
        <!-- Popup CSS -->
        <link rel="stylesheet" href="/template-assets/css/magnific-popup.min.css">
        <!-- Style CSS 
        <link rel="stylesheet" href="/template-assets/css/style.css">
        -->
        <!-- Dark CSS 
        <link rel="stylesheet" href="/template-assets/css/dark.css">
        -->
        <!-- Responsive CSS 
        <link rel="stylesheet" href="/template-assets/css/responsive.css">
        -->
        
        <title>Grin - Medical Health & Dental Clinic HTML Template</title>

        <link rel="icon" type="image/png" href="/template-assets/images/favicon.png">
        <!-- --- --- --- ./ TEMPLAGE --- --- --- -->
</head>
<body class="font-sans antialiased">
    <div id="app">
        <main class="py-0">
            <!--@ yield('content')-->
            @include($page, array('title'=>$title))
        </main>
    </div>

    <!-- Jquery Slim JS -->
    <script src="/template-assets/js/jquery.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="/template-assets/js/bootstrap.bundle.min.js"></script>
    <!-- Meanmenu JS -->
    <script src="/template-assets/js/jquery.meanmenu.js"></script>
    <!-- Owl Carousel JS -->
    <script src="/template-assets/js/owl.carousel.min.js"></script>
    <!-- Jquery Appear JS -->
    <script src="/template-assets/js/jquery.appear.js"></script>
    <!-- Odometer JS -->
    <script src="/template-assets/js/odometer.min.js"></script>
    <!-- Nice Select JS -->
    <script src="/template-assets/js/nice-select.min.js"></script>
    <!-- Popup JS -->
    <script src="/template-assets/js/jquery.magnific-popup.min.js"></script>
    <!-- Ajaxchimp JS -->
    <script src="/template-assets/js/jquery.ajaxchimp.min.js"></script>
    <!-- Form Validator JS -->
    <script src="/template-assets/js/form-validator.min.js"></script>
    <!-- Contact JS -->
    <script src="/template-assets/js/contact-form-script.js"></script>
    <!-- Wow JS -->
    <script src="/template-assets/js/wow.min.js"></script>
    <!-- Custom JS -->
    <script src="/template-assets/js/main.js"></script>

</body>
</html>
