<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TAVMOBIL</title>
    
    <link rel="stylesheet" type="text/css" href="{{ asset('style/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('style/css/animate.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('style/css/bootstrap-submenu.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('style/css/bootstrap-select.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('style/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="css/leaflet.css" type="text/css">
    <link rel="stylesheet" href="css/map.css" type="text/css">
    <link rel="stylesheet" type="text/css" href="{{ asset('style/fonts/font-awesome/css/font-awesome.min.css')}}">
    <link type="text/css" rel="stylesheet" href="{{ asset('style/fonts/bootstrap-icons/bootstrap-icons.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('style/fonts/flaticon/font/flaticon.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('style/fonts/linearicons/style.css')}}">
    <link rel="stylesheet" type="text/css"  href="{{ asset('style/css/jquery.mCustomScrollbar.css')}}">
    <link rel="stylesheet" type="text/css"  href="{{ asset('style/css/dropzone.css')}}">
    <link rel="stylesheet" type="text/css"  href="{{ asset('style/css/lightbox.min.css')}}">
    <link rel="stylesheet" type="text/css"  href="{{ asset('style/css/jnoty.css')}}">
    <link rel="stylesheet" type="text/css"  href="{{ asset('style/css/slick.css')}}">

    <!-- Custom stylesheet -->
    <link rel="stylesheet" type="text/css" href="{{ asset('style/css/initial.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('style/css/style.css')}}">
    <link rel="stylesheet" type="text/css" id="style_sheet" href="{{ asset('style/css/skins/midnight-blue.css')}}">

    <!-- Favicon icon -->
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" >

    <!-- Google fonts -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=OSans:400,300,600,700,800%7CPlayfair+Display:400,700%7CRoboto:100,300,400,400i,500,700">
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Raleway:300,400,500,600,300,700">
    <link href="https://fonts.googleapis.com/css2?family=Barlow+Condensed:wght@100;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link rel="stylesheet" type="text/css" href="css/ie10-viewport-bug-workaround.css">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script  src="js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script  src="js/ie-emulation-modes-warning.js"></script>
    <!-- <script src="https://unpkg.com/vue@3"></script>
    <script src="https://unpkg.com/vue-router@4"></script> -->

</head>
<body>
    <div id="app">
        <router-view></router-view>
        <footer-component></footer-component>
        <fullpagesearch-component></fullpagesearch-component>
        <carmodal-component></carmodal-component>
    </div>

    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{asset('style/js/jquery.min.js')}}"></script>
    <script src="{{asset('style/js/popper.min.js')}}"></script>
    <script src="{{asset('style/js/bootstrap.bundle.min.js')}}"></script>
    <script  src="{{asset('style/js/bootstrap-submenu.js')}}"></script>
    <script  src="{{asset('style/js/rangeslider.js')}}"></script>
    <script  src="{{asset('style/js/jquery.mb.YTPlayer.js')}}"></script>
    <script  src="{{asset('style/js/bootstrap-select.min.js')}}"></script>
    <script  src="{{asset('style/js/jquery.easing.1.3.js')}}"></script>
    <script  src="{{asset('style/js/jquery.scrollUp.js')}}"></script>
    <script  src="{{asset('style/js/jquery.mCustomScrollbar.concat.min.js')}}"></script>
    <script  src="{{asset('style/js/leaflet.js')}}"></script>
    <script  src="{{asset('style/js/leaflet-providers.js')}}"></script>
    <script  src="{{asset('style/js/leaflet.markercluster.js')}}"></script>
    <script  src="{{asset('style/js/dropzone.js')}}"></script>
    <script  src="{{asset('stylejs/slick.min.js')}}"></script>
    <script  src="{{asset('style/js/slick.min.js')}}"></script>
    <script  src="{{asset('style/js/jquery.filterizr.js')}}"></script>
    <script  src="{{asset('style/js/jquery.magnific-popup.min.js')}}"></script>
    <script  src="{{asset('style/js/jquery.countdown.js')}}"></script>
    <script  src="{{asset('style/js/jquery.mousewheel.min.js')}}"></script>
    <script  src="{{asset('style/js/lightgallery-all.js')}}"></script>
    <script  src="{{asset('style/js/jnoty.js')}}"></script>
    <script  src="{{asset('style/js/maps.js')}}"></script>
    <script  src="{{asset('style/js/sidebar.js')}}"></script>
    <script  src="{{asset('style/js/app.js')}}"></script>

<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script  src="{{asset('style/js/ie10-viewport-bug-workaround.js')}}"></script>
<!-- Custom javascript -->
<script  src="{{asset('style/js/ie10-viewport-bug-workaround.js')}}"></script>
</body>
</html>