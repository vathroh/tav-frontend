<!DOCTYPE html>
<html lang="zxx">
<head>
    <title>TAVMOBIL</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">

    <!-- External CSS libraries -->
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

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script  src="js/html5shiv.min.js"></script>
    <script  src="js/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<!-- <div class="page_loader"></div> -->

<!-- Top header start -->
<!-- <header class="top-header" id="top-header-2">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-8 col-md-8 col-sm-7 col-7">
                <div class="list-inline">
                    <a href="#"><i class="fa fa-map-marker"></i> 121 King Street, Melbourne</a>
                    <a href="tel:info@themevessel.com" class="d-none-768"><i class="fa fa-envelope"></i>info@themevessel.com</a>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-5 col-5">
                <ul class="top-social-media pull-right">
                    <li>
                        <a href="login.html" class="sign-in"><i class="fa fa-sign-in"></i> Login</a>
                    </li>
                    <li>
                        <a href="signup.html" class="sign-in"><i class="fa fa-user"></i> Register</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</header>  -->
<!-- Top header end-->

<!-- Main header start -->

<!-- <header class="main-header header-with-top" id="main-header-4">
    <nav class="navbar navbar-expand-lg navbar-light" id="mainNav">
        <div class="header-left">
            <a class="navbar-brand logos" href="index.html">
                <img src="{{asset('style/img/logos/black-logo.png')}}" alt="logo">
            </a>
        </div>
        <button class="navbar-toggler" id="drawer" type="button"> 
            <span class="fa fa-bars"></span>
        </button>
        <div class="header-centar">
            <div class="navbar-collapse collapse" id="navbar">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link dropdown-toggle" href="#" aria-haspopup="true" aria-expanded="false">
                            Jual Mobil
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Beli Mobil
                        </a>
                        
                    </li>
                    <li class="nav-item">
                        <a class="nav-link dropdown-toggle" href="" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dealer</a>
                        
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink6" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Franchise
                        </a>
                        
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="#" id="navbarDropdownMenuLink7" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Tentang
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="shop-list.html">FAQ</a></li>
                            <li><a class="dropdown-item" href="shop-cart.html">Artikel</a></li>
                            <li><a class="dropdown-item" href="shop-checkout.html">Hubungi Kami</a></li>
                        </ul>
                    </li>
                    
                </ul>
                <div class="col-lg-4 col-md-4 col-sm-5 col-5">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="" id="Btnlogin" class="nav-link" aria-haspopup="true" aria-expanded="false">Login</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>   
    </nav>
</header> -->
<header-component></header-component>
<!-- Main header end -->

<!-- Sidenav start -->
<nav id="sidebar" class="nav-sidebar">
    <!-- Close btn-->
    <div id="dismiss">
        <i class="fa fa-close"></i>
    </div>
    <div class="sidebar-inner">
        <div class="sidebar-logo">
            <img src="img/logos/black-logo.png" alt="sidebarlogo">
        </div>
        <div class="sidebar-navigation">
            <h3 class="heading">Pages</h3>
            <ul class="menu-list">
                <li><a href="#" class="active pt0">Index <em class="fa fa-chevron-down"></em></a>
                    <ul>
                        <li><a href="index.html">Index 1</a></li>
                        <li><a href="index-2.html">Index 2</a></li>
                        <li><a href="index-3.html">Index 3</a></li>
                        <li><a href="index-4.html">Index 4</a></li>
                        <li><a href="index-5.html">Index 5</a></li>
                        <li><a href="index-6.html">Index 6</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#">Car Listing <em class="fa fa-chevron-down"></em></a>
                    <ul>
                        <li>
                            <a href="#">List Layout <em class="fa fa-chevron-down"></em></a>
                            <ul>
                                <li><a class="dropdown-item" href="car-list-rightside.html">List Right Sidebar</a></li>
                                <li><a class="dropdown-item" href="car-list-leftsidebar.html">List Left Sidebar</a></li>
                                <li><a class="dropdown-item" href="car-list-fullWidth.html">List FullWidth</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">Grid Layout <em class="fa fa-chevron-down"></em></a>
                            <ul>
                                <li><a class="dropdown-item" href="car-grid-rightside.html">Grid Right Sidebar</a></li>
                                <li><a class="dropdown-item" href="car-grid-leftside.html">Grid Left Sidebar</a></li>
                                <li><a class="dropdown-item" href="car-grid-fullWidth.html">Grid FullWidth</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">Car Details <em class="fa fa-chevron-down"></em></a>
                            <ul>
                                <li><a class="dropdown-item" href="car-details.html">Car Details 1</a></li>
                                <li><a class="dropdown-item" href="car-details-2.html">Car Details 2</a></li>
                                <li><a class="dropdown-item" href="car-details-3.html">Car Details 3</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li><a href="#">Pages <em class="fa fa-chevron-down"></em></a>
                    <ul>
                        <li>
                            <a href="about.html">About Us</a>
                        </li>
                        <li>
                            <a href="services.html">Services</a>
                        </li>
                        <li>
                            <a href="agent.html">Agent</a>
                        </li>
                        <li>
                            <a href="car-comparison.html">Car Compare</a>
                        </li>
                        <li>
                            <a href="car-reviews.html">Car Reviews</a>
                        </li>
                        <li>
                            <a href="gallery.html">Gallery</a>
                        </li>
                        <li>
                            <a href="typography.html">Typography</a>
                        </li>
                        <li>
                            <a href="pricing-tables.html">Pricing Tables</a>
                        </li>
                        <li>
                            <a href="elements.html">Elements</a>
                        </li>
                        <li>
                            <a href="faq.html">Faq</a>
                        </li>
                        <li>
                            <a href="icon.html">Icons</a>
                        </li>
                        <li>
                            <a href="coming-soon.html">Coming Soon</a>
                        </li>
                        <li>
                            <a href="404.html">Error Page</a>
                        </li>
                        <li>
                            <a href="login.html">login</a>
                        </li>
                        <li>
                            <a href="signup.html">Register</a>
                        </li>
                    </ul>
                </li>
                <li><a href="#">Blog <em class="fa fa-chevron-down"></em></a>
                    <ul>
                        <li><a href="blog-columns-2col.html">Blog Columns 2</a></li>
                        <li><a href="blog-columns-3col.html">Blog Columns 3</a></li>
                        <li><a href="blog-right-sidebar.html">Blog Right Sidebar</a></li>
                        <li><a href="blog-details.html">Blog Details</a></li>
                    </ul>
                </li>
                <li><a href="#">Shop <em class="fa fa-chevron-down"></em></a>
                    <ul>
                        <li><a href="shop-list.html">Shop List</a></li>
                        <li><a href="shop-cart.html">Shop Cart</a></li>
                        <li><a href="shop-checkout.html">Shop Checkout</a></li>
                        <li><a href="shop-details.html">Shop Details</a></li>
                    </ul>
                </li>
                <li>
                    <a href="contact.html">Contact</a>
                </li>
                <li>
                    <a href="login.html" class="nav-link h-icon">
                        <i class="flaticon-logout"></i>
                    </a>
                </li>
                <li>
                    <a href="#full-page-search" class="nav-link h-icon">
                        <i class="fa fa-search"></i>
                    </a>
                </li>
            </ul>
        </div>
        <div class="get-in-touch">
            <h3 class="heading">Get in Touch</h3>
            <div class="get-in-touch-box d-flex">
                <i class="flaticon-phone"></i>
                <div class="detail">
                    <a href="tel:0477-0477-8556-552">0477 8556 552</a>
                </div>
            </div>
            <div class="get-in-touch-box d-flex">
                <i class="flaticon-mail"></i>
                <div class="detail">
                    <a href="#">info@themevessel.com</a>
                </div>
            </div>
            <div class="get-in-touch-box d-flex mb-0">
                <i class="flaticon-earth"></i>
                <div class="detail">
                    <a href="#">info@themevessel.com</a>
                </div>
            </div>
        </div>
        <div class="get-social">
            <h3 class="heading">Get Social</h3>
            <a href="#" class="facebook-bg">
                <i class="fa fa-facebook"></i>
            </a>
            <a href="#" class="twitter-bg">
                <i class="fa fa-twitter"></i>
            </a>
            <a href="#" class="google-bg">
                <i class="fa fa-google"></i>
            </a>
            <a href="#" class="linkedin-bg">
                <i class="fa fa-linkedin"></i>
            </a>
        </div>
    </div>
</nav>
<!-- Sidenav end -->

<!-- Banner start -->
<div class="banner" id="banner">
    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-inner banner-slider-inner">
            <div class="carousel-item banner-max-height active item-bg">
                <img class="d-block w-100 h-100" src="{{asset('style/img/banner/car1.jpg')}}" alt="banner">
                <div class="carousel-content banner-info-2 bi-2">
                    <h1>Welcome to Car Cmart</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</p>
                    <a href="#" class="btn-6">Get Started Now</a>
                </div>
            </div>
            <div class="carousel-item banner-max-height item-bg">
                <img class="d-block w-100 h-100" src="img/banner/img-5.png" alt="banner">
                <div class="carousel-content banner-info-2 bi-2">
                    <h1>Find your Dream Car</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</p>
                    <a href="#" class="btn-6">Get Started Now</a>
                </div>
            </div>
            <div class="carousel-item banner-max-height item-bg">
                <img class="d-block w-100 h-100" src="img/banner/img-6.png" alt="banner">
                <div class="carousel-content banner-info-2 bi-2">
                    <h1>Best place for sell car!</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</p>
                    <a href="#" class="btn-6">Get Started Now</a>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>
<!-- Banner end -->

<!-- Search box 3 start -->
<div class="search-box-3">
    <div class="container">
        <form method="GET">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6 col-6">
                    <div class="form-group">
                        <select class="selectpicker search-fields" name="select-brand">
                            <option>Select Brand</option>
                            <option>Audi</option>
                            <option>BMW</option>
                            <option>Honda</option>
                            <option>Nissan</option>
                        </select>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-6">
                    <div class="form-group">
                        <select class="selectpicker search-fields" name="select-make">
                            <option>Select Make</option>
                            <option>BMW</option>
                            <option>Honda</option>
                            <option>Lamborghini</option>
                            <option>Sports Car</option>
                        </select>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-6">
                    <div class="form-group">
                        <select class="selectpicker search-fields" name="select-location">
                            <option>Select Location</option>
                            <option>United States</option>
                            <option>United Kingdom</option>
                        </select>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-6">
                    <div class="form-group">
                        <select class="selectpicker search-fields" name="select-year">
                            <option>Select Year</option>
                            <option>2018</option>
                            <option>2019</option>
                            <option>2020</option>
                            <option>2021</option>
                        </select>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-6">
                    <div class="form-group">
                        <select class="selectpicker search-fields" name="select-type">
                            <option>Select Type Of Car</option>
                            <option>New Car</option>
                            <option>Used Car</option>
                        </select>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-6">
                    <div class="form-group">
                        <select class="selectpicker search-fields" name="transmission">
                            <option>Transmission</option>
                            <option>Automatic</option>
                            <option>Manual</option>
                        </select>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-6">
                    <div class="form-group">
                        <div class="range-slider">
                            <div data-min="0" data-max="150000" data-unit="USD" data-min-name="min_price" data-max-name="max_price" class="range-slider-ui ui-slider" aria-disabled="false"></div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-6">
                    <div class="form-group">
                        <button class="btn w-100 button-theme btn-md">
                            <i class="fa fa-search"></i>Find
                        </button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
<!-- Search box 3 end -->

<!-- Featured car start -->
<div class="featured-car content-area">
    <div class="container">
        <!-- Main title -->
        <div class="main-title">
            <h1 class="mb-10">Featured Cars</h1>
            <div class="title-border">
                <div class="title-border-inner"></div>
                <div class="title-border-inner"></div>
                <div class="title-border-inner"></div>
                <div class="title-border-inner"></div>
                <div class="title-border-inner"></div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="car-box-3">
                    <div class="car-thumbnail">
                        <a href="car-details.html" class="car-img">
                            <div class="tag-2 bg-active">Featured</div>
                            <div class="price-box-2"><sup>$</sup>800<span>/month</span> </div>
                            <img class="d-block w-100" src="img/car/car-5.png" alt="car">
                        </a>
                        <div class="carbox-overlap-wrapper">
                            <div class="overlap-box">
                                <div class="overlap-btns-area">
                                    <a class="overlap-btn" data-bs-toggle="modal" data-bs-target="#carOverviewModal">
                                        <i class="fa fa-eye-slash"></i>
                                    </a>
                                    <a class="overlap-btn wishlist-btn">
                                        <i class="fa fa-heart-o"></i>
                                    </a>
                                    <a class="overlap-btn compare-btn">
                                        <i class="fa fa-balance-scale"></i>
                                    </a>
                                    <div class="car-magnify-gallery">
                                        <a href="img/car/car-5.png" class="overlap-btn" data-sub-html="<h4>Hyundai Santa</h4><p>A beautiful Sunrise this morning taken En-route to Keswick not one as planned but I'm extremely happy....</p>">
                                            <i class="fa fa-expand"></i>
                                            <img class="hidden" src="img/car/car-5.png" alt="hidden-img">
                                        </a>
                                        <a href="img/car/car-2.png" class="hidden" data-sub-html="<h4>2020 Ford Mustang</h4><p>A beautiful Sunrise this morning taken En-route to Keswick not one as planned but I'm extremely happy....</p>">
                                            <img class="hidden" src="img/car/car-2.png" alt="hidden-img">
                                        </a>
                                        <a href="img/car/car-3.png" class="hidden" data-sub-html="<h4>Lexus GS F</h4><p>A beautiful Sunrise this morning taken En-route to Keswick not one as planned but I'm extremely happy....</p>">
                                            <img class="hidden" src="img/car/car-3.png" alt="hidden-img">
                                        </a>
                                        <a href="img/car/car-4.png" class="hidden" data-sub-html="<h4>Toyota Prius specs</h4><p>A beautiful Sunrise this morning taken En-route to Keswick not one as planned but I'm extremely happy....</p>">
                                            <img class="hidden" src="img/car/car-4.png" alt="hidden-img">
                                        </a>
                                        <a href="img/car/car-1.png" class="hidden" data-sub-html="<h4>Toyota Prius</h4><p>A beautiful Sunrise this morning taken En-route to Keswick not one as planned but I'm extremely happy....</p>">
                                            <img class="hidden" src="img/car/car-1.png" alt="hidden-img">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="detail">
                        <h1 class="title">
                            <a href="car-details.html">Hyundai Santa</a>
                        </h1>
                        <div class="location">
                            <a href="car-details.html">
                                <i class="flaticon-pin"></i>123 Kathal St. Tampa City,
                            </a>
                        </div>
                        <ul class="facilities-list clearfix">
                            <li>
                                <i class="flaticon-way"></i> 4,000 km
                            </li>
                            <li>
                                <i class="flaticon-manual-transmission"></i> Manual
                            </li>
                            <li>
                                <i class="flaticon-calendar-1"></i> 2021
                            </li>
                            <li>
                                <i class="flaticon-fuel"></i> Petrol
                            </li>
                            <li>
                                <i class="flaticon-car"></i> Sport
                            </li>
                            <li>
                                <i class="flaticon-gear"></i> Blue
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="car-box-3">
                    <div class="car-thumbnail">
                        <a href="car-details.html" class="car-img">
                            <div class="tag-2">For Sale</div>
                            <div class="price-box-2"><sup>$</sup>780<span>/month</span> </div>
                            <img class="d-block w-100" src="img/car/car-1.png" alt="car">
                        </a>
                        <div class="carbox-overlap-wrapper">
                            <div class="overlap-box">
                                <div class="overlap-btns-area">
                                    <a class="overlap-btn" data-bs-toggle="modal" data-bs-target="#carOverviewModal">
                                        <i class="fa fa-eye-slash"></i>
                                    </a>
                                    <a class="overlap-btn wishlist-btn">
                                        <i class="fa fa-heart-o"></i>
                                    </a>
                                    <a class="overlap-btn compare-btn">
                                        <i class="fa fa-balance-scale"></i>
                                    </a>
                                    <div class="car-magnify-gallery">
                                        <a href="img/car/car-1.png" class="overlap-btn" data-sub-html="<h4>Toyota Prius</h4><p>A beautiful Sunrise this morning taken En-route to Keswick not one as planned but I'm extremely happy....</p>">
                                            <i class="fa fa-expand"></i>
                                            <img class="hidden" src="img/car/car-1.png" alt="hidden-img">
                                        </a>
                                        <a href="img/car/car-2.png" class="hidden" data-sub-html="<h4>2020 Ford Mustang</h4><p>A beautiful Sunrise this morning taken En-route to Keswick not one as planned but I'm extremely happy....</p>">
                                            <img class="hidden" src="img/car/car-2.png" alt="hidden-img">
                                        </a>
                                        <a href="img/car/car-3.png" class="hidden" data-sub-html="<h4>Lexus GS F</h4><p>A beautiful Sunrise this morning taken En-route to Keswick not one as planned but I'm extremely happy....</p>">
                                            <img class="hidden" src="img/car/car-3.png" alt="hidden-img">
                                        </a>
                                        <a href="img/car/car-4.png" class="hidden" data-sub-html="<h4>Toyota Prius specs</h4><p>A beautiful Sunrise this morning taken En-route to Keswick not one as planned but I'm extremely happy....</p>">
                                            <img class="hidden" src="img/car/car-4.png" alt="hidden-img">
                                        </a>
                                        <a href="img/car/car-5.png" class="hidden" data-sub-html="<h4>Hyundai Santa</h4><p>A beautiful Sunrise this morning taken En-route to Keswick not one as planned but I'm extremely happy....</p>">
                                            <img class="hidden" src="img/car/car-5.png" alt="hidden-img">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="detail">
                        <h1 class="title">
                            <a href="car-details.html">Toyota Prius</a>
                        </h1>
                        <div class="location">
                            <a href="car-details.html">
                                <i class="flaticon-pin"></i>123 Kathal St. Tampa City,
                            </a>
                        </div>
                        <ul class="facilities-list clearfix">
                            <li>
                                <i class="flaticon-way"></i> 4,000 km
                            </li>
                            <li>
                                <i class="flaticon-manual-transmission"></i> Manual
                            </li>
                            <li>
                                <i class="flaticon-calendar-1"></i> 2021
                            </li>
                            <li>
                                <i class="flaticon-fuel"></i> Petrol
                            </li>
                            <li>
                                <i class="flaticon-car"></i> Sport
                            </li>
                            <li>
                                <i class="flaticon-gear"></i> Blue
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="car-box-3">
                    <div class="car-thumbnail">
                        <a href="car-details.html" class="car-img">
                            <div class="tag-2 bg-active">Featured</div>
                            <div class="price-box-2"><sup>$</sup>650<span>/month</span> </div>
                            <img class="d-block w-100" src="img/car/car-4.png" alt="car">
                        </a>
                        <div class="carbox-overlap-wrapper">
                            <div class="overlap-box">
                                <div class="overlap-btns-area">
                                    <a class="overlap-btn" data-bs-toggle="modal" data-bs-target="#carOverviewModal">
                                        <i class="fa fa-eye-slash"></i>
                                    </a>
                                    <a class="overlap-btn wishlist-btn">
                                        <i class="fa fa-heart-o"></i>
                                    </a>
                                    <a class="overlap-btn compare-btn">
                                        <i class="fa fa-balance-scale"></i>
                                    </a>
                                    <div class="car-magnify-gallery">
                                        <a href="img/car/car-4.png" class="overlap-btn" data-sub-html="<h4>Toyota Prius specs</h4><p>A beautiful Sunrise this morning taken En-route to Keswick not one as planned but I'm extremely happy....</p>">
                                            <i class="fa fa-expand"></i>
                                            <img class="hidden" src="img/car/car-4.png" alt="hidden-img">
                                        </a>
                                        <a href="img/car/car-2.png" class="hidden" data-sub-html="<h4>2020 Ford Mustang</h4><p>A beautiful Sunrise this morning taken En-route to Keswick not one as planned but I'm extremely happy....</p>">
                                            <img class="hidden" src="img/car/car-2.png" alt="hidden-img">
                                        </a>
                                        <a href="img/car/car-3.png" class="hidden" data-sub-html="<h4>Lexus GS F</h4><p>A beautiful Sunrise this morning taken En-route to Keswick not one as planned but I'm extremely happy....</p>">
                                            <img class="hidden" src="img/car/car-3.png" alt="hidden-img">
                                        </a>
                                        <a href="img/car/car-5.png" class="hidden" data-sub-html="<h4>Hyundai Santa</h4><p>A beautiful Sunrise this morning taken En-route to Keswick not one as planned but I'm extremely happy....</p>">
                                            <img class="hidden" src="img/car/car-5.png" alt="hidden-img">
                                        </a>
                                        <a href="img/car/car-1.png" class="hidden" data-sub-html="<h4>Toyota Prius</h4><p>A beautiful Sunrise this morning taken En-route to Keswick not one as planned but I'm extremely happy....</p>">
                                            <img class="hidden" src="img/car/car-1.png" alt="hidden-img">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="detail">
                        <h1 class="title">
                            <a href="car-details.html">Toyota Prius specs</a>
                        </h1>
                        <div class="location">
                            <a href="car-details.html">
                                <i class="flaticon-pin"></i>123 Kathal St. Tampa City,
                            </a>
                        </div>
                        <ul class="facilities-list clearfix">
                            <li>
                                <i class="flaticon-way"></i> 4,000 km
                            </li>
                            <li>
                                <i class="flaticon-manual-transmission"></i> Manual
                            </li>
                            <li>
                                <i class="flaticon-calendar-1"></i> 2021
                            </li>
                            <li>
                                <i class="flaticon-fuel"></i> Petrol
                            </li>
                            <li>
                                <i class="flaticon-car"></i> Sport
                            </li>
                            <li>
                                <i class="flaticon-gear"></i> Blue
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="car-box-3">
                    <div class="car-thumbnail">
                        <a href="car-details.html" class="car-img">
                            <div class="tag-2">For Sale</div>
                            <div class="price-box-2"><sup>$</sup>710<span>/month</span> </div>
                            <img class="d-block w-100" src="img/car/car-3.png" alt="car">
                        </a>
                        <div class="carbox-overlap-wrapper">
                            <div class="overlap-box">
                                <div class="overlap-btns-area">
                                    <a class="overlap-btn" data-bs-toggle="modal" data-bs-target="#carOverviewModal">
                                        <i class="fa fa-eye-slash"></i>
                                    </a>
                                    <a class="overlap-btn wishlist-btn">
                                        <i class="fa fa-heart-o"></i>
                                    </a>
                                    <a class="overlap-btn compare-btn">
                                        <i class="fa fa-balance-scale"></i>
                                    </a>
                                    <div class="car-magnify-gallery">
                                        <a href="img/car/car-3.png" class="overlap-btn" data-sub-html="<h4>Lexus GS F</h4><p>A beautiful Sunrise this morning taken En-route to Keswick not one as planned but I'm extremely happy....</p>">
                                            <i class="fa fa-expand"></i>
                                            <img class="hidden" src="img/car/car-3.png" alt="hidden-img">
                                        </a>
                                        <a href="img/car/car-2.png" class="hidden" data-sub-html="<h4>2020 Ford Mustang</h4><p>A beautiful Sunrise this morning taken En-route to Keswick not one as planned but I'm extremely happy....</p>">
                                            <img class="hidden" src="img/car/car-2.png" alt="hidden-img">
                                        </a>
                                        <a href="img/car/car-5.png" class="hidden" data-sub-html="<h4>Hyundai Santa</h4><p>A beautiful Sunrise this morning taken En-route to Keswick not one as planned but I'm extremely happy....</p>">
                                            <img class="hidden" src="img/car/car-5.png" alt="hidden-img">
                                        </a>
                                        <a href="img/car/car-4.png" class="hidden" data-sub-html="<h4>Toyota Prius specs</h4><p>A beautiful Sunrise this morning taken En-route to Keswick not one as planned but I'm extremely happy....</p>">
                                            <img class="hidden" src="img/car/car-4.png" alt="hidden-img">
                                        </a>
                                        <a href="img/car/car-1.png" class="hidden" data-sub-html="<h4>Toyota Prius</h4><p>A beautiful Sunrise this morning taken En-route to Keswick not one as planned but I'm extremely happy....</p>">
                                            <img class="hidden" src="img/car/car-1.png" alt="hidden-img">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="detail">
                        <h1 class="title">
                            <a href="car-details.html">Lexus GS F</a>
                        </h1>
                        <div class="location">
                            <a href="car-details.html">
                                <i class="flaticon-pin"></i>123 Kathal St. Tampa City,
                            </a>
                        </div>
                        <ul class="facilities-list clearfix">
                            <li>
                                <i class="flaticon-way"></i> 4,000 km
                            </li>
                            <li>
                                <i class="flaticon-manual-transmission"></i> Manual
                            </li>
                            <li>
                                <i class="flaticon-calendar-1"></i> 2021
                            </li>
                            <li>
                                <i class="flaticon-fuel"></i> Petrol
                            </li>
                            <li>
                                <i class="flaticon-car"></i> Sport
                            </li>
                            <li>
                                <i class="flaticon-gear"></i> Blue
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="car-box-3">
                    <div class="car-thumbnail">
                        <a href="car-details.html" class="car-img">
                            <div class="tag-2 bg-active">Featured</div>
                            <div class="price-box-2"><sup>$</sup>920<span>/month</span> </div>
                            <img class="d-block w-100" src="img/car/car-6.png" alt="car">
                        </a>
                        <div class="carbox-overlap-wrapper">
                            <div class="overlap-box">
                                <div class="overlap-btns-area">
                                    <a class="overlap-btn" data-bs-toggle="modal" data-bs-target="#carOverviewModal">
                                        <i class="fa fa-eye-slash"></i>
                                    </a>
                                    <a class="overlap-btn wishlist-btn">
                                        <i class="fa fa-heart-o"></i>
                                    </a>
                                    <a class="overlap-btn compare-btn">
                                        <i class="fa fa-balance-scale"></i>
                                    </a>
                                    <div class="car-magnify-gallery">
                                        <a href="img/car/car-6.png" class="overlap-btn" data-sub-html="<h4>Audi Q7 2018</h4><p>A beautiful Sunrise this morning taken En-route to Keswick not one as planned but I'm extremely happy....</p>">
                                            <i class="fa fa-expand"></i>
                                            <img class="hidden" src="img/car/car-6.png" alt="hidden-img">
                                        </a>
                                        <a href="img/car/car-3.png" class="hidden" data-sub-html="<h4>Lexus GS F</h4><p>A beautiful Sunrise this morning taken En-route to Keswick not one as planned but I'm extremely happy....</p>">
                                            <img class="hidden" src="img/car/car-3.png" alt="hidden-img">
                                        </a>
                                        <a href="img/car/car-5.png" class="hidden" data-sub-html="<h4>Hyundai Santa</h4><p>A beautiful Sunrise this morning taken En-route to Keswick not one as planned but I'm extremely happy....</p>">
                                            <img class="hidden" src="img/car/car-5.png" alt="hidden-img">
                                        </a>
                                        <a href="img/car/car-4.png" class="hidden" data-sub-html="<h4>Toyota Prius specs</h4><p>A beautiful Sunrise this morning taken En-route to Keswick not one as planned but I'm extremely happy....</p>">
                                            <img class="hidden" src="img/car/car-4.png" alt="hidden-img">
                                        </a>
                                        <a href="img/car/car-1.png" class="hidden" data-sub-html="<h4>Toyota Prius</h4><p>A beautiful Sunrise this morning taken En-route to Keswick not one as planned but I'm extremely happy....</p>">
                                            <img class="hidden" src="img/car/car-1.png" alt="hidden-img">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="detail">
                        <h1 class="title">
                            <a href="car-details.html">Audi Q7 2018</a>
                        </h1>
                        <div class="location">
                            <a href="car-details.html">
                                <i class="flaticon-pin"></i>123 Kathal St. Tampa City,
                            </a>
                        </div>
                        <ul class="facilities-list clearfix">
                            <li>
                                <i class="flaticon-way"></i> 4,000 km
                            </li>
                            <li>
                                <i class="flaticon-manual-transmission"></i> Manual
                            </li>
                            <li>
                                <i class="flaticon-calendar-1"></i> 2021
                            </li>
                            <li>
                                <i class="flaticon-fuel"></i> Petrol
                            </li>
                            <li>
                                <i class="flaticon-car"></i> Sport
                            </li>
                            <li>
                                <i class="flaticon-gear"></i> Blue
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="car-box-3">
                    <div class="car-thumbnail">
                        <a href="car-details.html" class="car-img">
                            <div class="tag-2">For Rent</div>
                            <div class="price-box-2"><sup>$</sup>855<span>/month</span> </div>
                            <img class="d-block w-100" src="img/car/car-2.png" alt="car">
                        </a>
                        <div class="carbox-overlap-wrapper">
                            <div class="overlap-box">
                                <div class="overlap-btns-area">
                                    <a class="overlap-btn" data-bs-toggle="modal" data-bs-target="#carOverviewModal">
                                        <i class="fa fa-eye-slash"></i>
                                    </a>
                                    <a class="overlap-btn wishlist-btn">
                                        <i class="fa fa-heart-o"></i>
                                    </a>
                                    <a class="overlap-btn compare-btn">
                                        <i class="fa fa-balance-scale"></i>
                                    </a>
                                    <div class="car-magnify-gallery">
                                        <a href="img/car/car-2.png" class="overlap-btn" data-sub-html="<h4>2020 Ford Mustang</h4><p>A beautiful Sunrise this morning taken En-route to Keswick not one as planned but I'm extremely happy....</p>">
                                            <i class="fa fa-expand"></i>
                                            <img class="hidden" src="img/car/car-2.png" alt="hidden-img">
                                        </a>
                                        <a href="img/car/car-3.png" class="hidden" data-sub-html="<h4>Lexus GS F</h4><p>A beautiful Sunrise this morning taken En-route to Keswick not one as planned but I'm extremely happy....</p>">
                                            <img class="hidden" src="img/car/car-3.png" alt="hidden-img">
                                        </a>
                                        <a href="img/car/car-5.png" class="hidden" data-sub-html="<h4>Hyundai Santa</h4><p>A beautiful Sunrise this morning taken En-route to Keswick not one as planned but I'm extremely happy....</p>">
                                            <img class="hidden" src="img/car/car-5.png" alt="hidden-img">
                                        </a>
                                        <a href="img/car/car-4.png" class="hidden" data-sub-html="<h4>Toyota Prius specs</h4><p>A beautiful Sunrise this morning taken En-route to Keswick not one as planned but I'm extremely happy....</p>">
                                            <img class="hidden" src="img/car/car-4.png" alt="hidden-img">
                                        </a>
                                        <a href="img/car/car-6.png" class="hidden" data-sub-html="<h4>Audi Q7 2018</h4><p>A beautiful Sunrise this morning taken En-route to Keswick not one as planned but I'm extremely happy....</p>">
                                            <img class="hidden" src="img/car/car-6.png" alt="hidden-img">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="detail">
                        <h1 class="title">
                            <a href="car-details.html">2020 Ford Mustang</a>
                        </h1>
                        <div class="location">
                            <a href="car-details.html">
                                <i class="flaticon-pin"></i>123 Kathal St. Tampa City,
                            </a>
                        </div>
                        <ul class="facilities-list clearfix">
                            <li>
                                <i class="flaticon-way"></i> 4,000 km
                            </li>
                            <li>
                                <i class="flaticon-manual-transmission"></i> Manual
                            </li>
                            <li>
                                <i class="flaticon-calendar-1"></i> 2021
                            </li>
                            <li>
                                <i class="flaticon-fuel"></i> Petrol
                            </li>
                            <li>
                                <i class="flaticon-car"></i> Sport
                            </li>
                            <li>
                                <i class="flaticon-gear"></i> Blue
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Featured car end -->

<!-- Advantages 2 start -->
<div class="advantages-2 content-area bg-grea-3">
    <div class="container">
        <!-- Main title -->
        <div class="main-title">
            <h1 class="mb-10">Our Advantages</h1>
            <div class="title-border">
                <div class="title-border-inner"></div>
                <div class="title-border-inner"></div>
                <div class="title-border-inner"></div>
                <div class="title-border-inner"></div>
                <div class="title-border-inner"></div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="advantages-box-2 df-box">
                    <div class="icon">
                        <i class="flaticon-shield"></i>
                    </div>
                    <div class="detail">
                        <h5>
                            <a href="services.html">Highly  Secured</a>
                        </h5>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="advantages-box-2 df-box">
                    <div class="icon">
                        <i class="flaticon-deal"></i>
                    </div>
                    <div class="detail">
                        <h5>
                            <a href="services.html">Trusted Agents</a>
                        </h5>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="advantages-box-2 df-box">
                    <div class="icon">
                        <i class="flaticon-money"></i>
                    </div>
                    <div class="detail">
                        <h5>
                            <a href="services.html">Get an Offer</a>
                        </h5>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="advantages-box-2 df-box">
                    <div class="icon">
                        <i class="flaticon-support-2"></i>
                    </div>
                    <div class="detail">
                        <h5>
                            <a href="services.html">Free Support</a>
                        </h5>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Advantages 2 end -->

<!-- Latest offers Start -->
<div class="latest-offers categories content-area-13">
    <div class="container">
        <!-- Main title -->
        <div class="main-title text-center">
            <h1 class="mb-10">Latest Offers</h1>
            <div class="title-border">
                <div class="title-border-inner"></div>
                <div class="title-border-inner"></div>
                <div class="title-border-inner"></div>
                <div class="title-border-inner"></div>
                <div class="title-border-inner"></div>
            </div>
        </div>
        <div class="row row-2">
            <div class="col-lg-4 col-md-12">
                <div class="row">
                    <div class="col-md-6 col-lg-12 col-pad">
                        <div class="latest-offers-box">
                            <div class="photo-overflow">
                                <div class="car-thumbnail-photo">
                                    <img class="img-fluid w-100" src="img/car/car-4.png" alt="photo">
                                </div>
                            </div>
                            <div class="new">New</div>
                            <div class="ling-section">
                                <div class="lo-text clearfix">
                                    <h3>
                                        <a href="car-details.html">Toyota Prius specs</a>
                                    </h3>
                                    <h5>$920.00 <span>/monthly</span></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-12 col-pad">
                        <div class="latest-offers-box">
                            <div class="photo-overflow">
                                <div class="car-thumbnail-photo">
                                    <img class="img-fluid w-100" src="img/car/car-6.png" alt="photo">
                                </div>
                            </div>
                            <div class="new">New</div>
                            <div class="ling-section">
                                <div class="lo-text clearfix">
                                    <h3>
                                        <a href="car-details.html">Audi Q7 2018</a>
                                    </h3>
                                    <h5>430.00 <span>/monthly</span></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-pad">
                <div class="latest-offers-box">
                    <div class="photo-overflow">
                        <div class="car-thumbnail-photo">
                            <img class="img-fluid w-100" src="img/car/car-11.png" alt="photo">
                        </div>
                    </div>
                    <div class="new">New</div>
                    <div class="ling-section">
                        <div class="lo-text clearfix">
                            <h3>
                                <a href="car-details.html">Audi 2021</a>
                            </h3>
                            <h5>740.00 <span>/monthly</span></h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="row">
                    <div class="col-md-12 col-lg-12 col-pad">
                        <div class="latest-offers-box">
                            <div class="photo-overflow">
                                <div class="car-thumbnail-photo">
                                    <img class="img-fluid w-100" src="img/car/car-1.png" alt="photo">
                                </div>
                            </div>
                            <div class="new">New</div>
                            <div class="ling-section">
                                <div class="lo-text clearfix">
                                    <h3>
                                        <a href="car-details.html">Toyota Prius</a>
                                    </h3>
                                    <h5>410.00 <span>/monthly</span></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-12 col-pad">
                        <div class="latest-offers-box">
                            <div class="photo-overflow">
                                <div class="car-thumbnail-photo">
                                    <img class="img-fluid w-100" src="img/car/car-2.png" alt="photo">
                                </div>
                            </div>
                            <div class="new">New</div>
                            <div class="ling-section">
                                <div class="lo-text clearfix">
                                    <h3>
                                        <a href="car-details.html">2020 Ford Mustang</a>
                                    </h3>
                                    <h5>920.00 <span>/monthly</span></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Latest offers end -->

<!-- Our team start -->
<div class="our-team content-area bg-grea-3">
    <div class="container">
        <!-- Main title -->
        <div class="main-title">
            <h1 class="mb-10">Our Agent</h1>
            <div class="title-border">
                <div class="title-border-inner"></div>
                <div class="title-border-inner"></div>
                <div class="title-border-inner"></div>
                <div class="title-border-inner"></div>
                <div class="title-border-inner"></div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                <div class="team-3">
                    <div class="thumb">
                        <img src="img/avatar/avatar-9.png" alt="agent" class="img-fluid">
                        <ul>
                            <li>
                                <a href="#" class="facebook-bg"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li>
                                <a href="#" class="twitter-bg"><i class="fa fa-twitter"></i></a>
                            </li>
                            <li>
                                <a href="#" class="google-bg"><i class="fa fa-google"></i></a>
                            </li>
                        </ul>
                    </div>
                    <div class="info">
                        <h5><a href="agent.html">Michelle Nelson</a></h5>
                        <p>Support Manager</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                <div class="team-3">
                    <div class="thumb">
                        <img src="img/avatar/avatar-10.png" alt="agent" class="img-fluid">
                        <ul>
                            <li>
                                <a href="#" class="facebook-bg"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li>
                                <a href="#" class="twitter-bg"><i class="fa fa-twitter"></i></a>
                            </li>
                            <li>
                                <a href="#" class="google-bg"><i class="fa fa-google"></i></a>
                            </li>
                        </ul>
                    </div>
                    <div class="info">
                        <h5><a href="agent.html">Martin Smith</a></h5>
                        <p>Web Developer</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                <div class="team-3">
                    <div class="thumb">
                        <img src="img/avatar/avatar-11.png" alt="agent" class="img-fluid">
                        <ul>
                            <li>
                                <a href="#" class="facebook-bg"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li>
                                <a href="#" class="twitter-bg"><i class="fa fa-twitter"></i></a>
                            </li>
                            <li>
                                <a href="#" class="google-bg"><i class="fa fa-google"></i></a>
                            </li>
                        </ul>
                    </div>
                    <div class="info">
                        <h5><a href="agent.html">Carolyn Stone</a></h5>
                        <p>Creative Director</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                <div class="team-3">
                    <div class="thumb">
                        <img src="img/avatar/avatar-12.png" alt="agent" class="img-fluid">
                        <ul>
                            <li>
                                <a href="#" class="facebook-bg"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li>
                                <a href="#" class="twitter-bg"><i class="fa fa-twitter"></i></a>
                            </li>
                            <li>
                                <a href="#" class="google-bg"><i class="fa fa-google"></i></a>
                            </li>
                        </ul>
                    </div>
                    <div class="info">
                        <h5><a href="agent.html">Brandon Miller</a></h5>
                        <p>Manager</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Our team end -->

<!-- Testimonial start -->
<div class="testimonial comon-slick content-area-5">
    <div class="container">
        <!-- Main title -->
        <div class="main-title">
            <h1 class="mb-10">Our Testimonial</h1>
            <div class="title-border">
                <div class="title-border-inner"></div>
                <div class="title-border-inner"></div>
                <div class="title-border-inner"></div>
                <div class="title-border-inner"></div>
                <div class="title-border-inner"></div>
            </div>
        </div>
        <!-- Slick slider area start -->
        <div class="slick row comon-slick-inner" data-slick='{"slidesToShow": 2, "responsive":[{"breakpoint": 1024,"settings":{"slidesToShow": 1}}, {"breakpoint": 768,"settings":{"slidesToShow": 1}}]}'>
            <div class="item slide-box">
                <div class="testimonials-inner">
                    <div class="user">
                        <a href="#">
                            <img class="media-object" src="img/avatar/avatar-2.png" alt="user">
                        </a>
                    </div>
                    <div class="testimonial-info">
                        <h3>
                            Creative Director, india
                        </h3>
                        <p>Office Manager</p>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text everLorem industry's standard dummy text everLorem.</p>
                        <div class="rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-half-full"></i>
                            <span>Reting</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item slide-box">
                <div class="testimonials-inner">
                    <div class="user">
                        <a href="#">
                            <img class="media-object" src="img/avatar/avatar-1.png" alt="user">
                        </a>
                    </div>
                    <div class="testimonial-info">
                        <h3>
                            Pitarshon Roky
                        </h3>
                        <p>Web Designer, Uk</p>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text everLorem industry's standard dummy text everLorem.</p>
                        <div class="rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-half-full"></i>
                            <span>Reting</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item slide-box">
                <div class="testimonials-inner">
                    <div class="user">
                        <a href="#">
                            <img class="media-object" src="img/avatar/avatar-3.png" alt="user">
                        </a>
                    </div>
                    <div class="testimonial-info">
                        <h3>
                            Maikel Alisa
                        </h3>
                        <p>Creative Director</p>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text everLorem industry's standard dummy text everLorem.</p>
                        <div class="rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-half-full"></i>
                            <span>Reting</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Testimonial end -->

<!-- Blog start -->
<div class="blog comon-slick content-area">
    <div class="container">
        <!-- Main title -->
        <div class="main-title">
            <h1 class="mb-10">Our Blog</h1>
            <div class="title-border">
                <div class="title-border-inner"></div>
                <div class="title-border-inner"></div>
                <div class="title-border-inner"></div>
                <div class="title-border-inner"></div>
                <div class="title-border-inner"></div>
            </div>
        </div>
        <div class="slick row comon-slick-inner" data-slick='{"slidesToShow": 3, "responsive":[{"breakpoint": 1024,"settings":{"slidesToShow": 2}}, {"breakpoint": 768,"settings":{"slidesToShow": 1}}]}'>
            <div class="item slide-box">
                <div class="blog-4">
                    <div class="blog-photo">
                        <img src="img/blog/blog-2.png" alt="blog" class="img-fluid">
                        <div class="date-box-2">27 Feb</div>
                        <div class="post-meta clearfix">
                            <span><a href="#"><i class="flaticon-user-1"></i></a>Admin</span>
                            <span><a href="#"><i class="flaticon-comment"></i></a>17K</span>
                            <span><a href="#"><i class="flaticon-calendar"></i></a>73k</span>
                        </div>
                    </div>
                    <div class="detail">
                        <h3>
                            <a href="blog-details.html">Are You Ready for the Online Dealership?</a>
                        </h3>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's</p>
                    </div>
                </div>
            </div>
            <div class="item slide-box">
                <div class="blog-4">
                    <div class="blog-photo">
                        <img src="img/blog/blog-1.png" alt="blog" class="img-fluid">
                        <div class="date-box-2">14 Aug</div>
                        <div class="post-meta clearfix">
                            <span><a href="#"><i class="flaticon-user-1"></i></a>Admin</span>
                            <span><a href="#"><i class="flaticon-comment"></i></a>17K</span>
                            <span><a href="#"><i class="flaticon-calendar"></i></a>73k</span>
                        </div>
                    </div>
                    <div class="detail">
                        <h3>
                            <a href="blog-details.html">Quality not Quantity for Selling Cars Today</a>
                        </h3>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's</p>
                    </div>
                </div>
            </div>
            <div class="item slide-box">
                <div class="blog-4">
                    <div class="blog-photo">
                        <img src="img/blog/blog-2.png" alt="blog" class="img-fluid">
                        <div class="date-box-2">14 Sep</div>
                        <div class="post-meta clearfix">
                            <span><a href="#"><i class="flaticon-user-1"></i></a>Admin</span>
                            <span><a href="#"><i class="flaticon-comment"></i></a>17K</span>
                            <span><a href="#"><i class="flaticon-calendar"></i></a>73k</span>
                        </div>
                    </div>
                    <div class="detail">
                        <h3>
                            <a href="blog-details.html">What's new coming from the automakers in future</a>
                        </h3>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's</p>
                    </div>
                </div>
            </div>
            <div class="item slide-box">
                <div class="blog-4">
                    <div class="blog-photo">
                        <img src="img/blog/blog-3.png" alt="blog" class="img-fluid">
                        <div class="date-box-2">14 Nov</div>
                        <div class="post-meta clearfix">
                            <span><a href="#"><i class="flaticon-user-1"></i></a>Admin</span>
                            <span><a href="#"><i class="flaticon-comment"></i></a>17K</span>
                            <span><a href="#"><i class="flaticon-calendar"></i></a>73k</span>
                        </div>
                    </div>
                    <div class="detail">
                        <h3>
                            <a href="blog-details.html">What's new coming from the automakers in future</a>
                        </h3>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Blog end -->

<!-- Intro section start -->
<div class="intro-section">
    <div class="intro-section-inner">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-md-8 col-sm-12">
                    <div class="intro-text">
                        <h3>Do You Have Questions ?</h3>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-12">
                    <a href="contact.html" class="btn btn-md">Get in Touch</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Intro section end -->

<!-- Footer start -->
<footer class="footer">
    <div class="container footer-inner">
        <div class="row">
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                <div class="footer-item clearfix">
                    <h4>
                        Contact Info
                    </h4>
                    <ul class="contact-info">
                        <li>
                            <i class="flaticon-pin"></i>20/F Green Road, Dhanmondi, Dhaka
                        </li>
                        <li>
                            <i class="flaticon-mail"></i><a href="mailto:sales@hotelempire.com">info@themevessel.com</a>
                        </li>
                        <li>
                            <i class="flaticon-phone"></i><a href="tel:+55-417-634-7071">+0477 85X6 552</a>
                        </li>
                        <li>
                            <i class="flaticon-fax"></i>+0477 85X6 552
                        </li>
                    </ul>
                    <div class="clearfix"></div>
                    <div class="social-list-2">
                        <ul>
                            <li><a href="#" class="facebook-bg"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#" class="twitter-bg"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#" class="google-bg"><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="#" class="linkedin-bg"><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-xl-2 col-lg-2 col-md-6 col-sm-6">
                <div class="footer-item">
                    <h4>
                        Useful Links
                    </h4>
                    <ul class="links">
                        <li>
                            <a href="#">Home</a>
                        </li>
                        <li>
                            <a href="about.html">About Us</a>
                        </li>
                        <li>
                            <a href="services.html">Services</a>
                        </li>
                        <li>
                            <a href="faq.html">Faq</a>
                        </li>
                        <li>
                            <a href="contact.html">Contact Us</a>
                        </li>
                        <li>
                            <a href="car-comparison.html">Car Compare</a>
                        </li>
                        <li>
                            <a href="car-reviews.html">Car Reviews</a>
                        </li>
                        <li>
                            <a href="elements.html">Elements</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                <div class="recent-posts footer-item">
                    <h4>Recent Posts</h4>
                    <div class="d-flex mb-4 recent-posts-box">
                        <a href="car-details.html">
                            <img class="flex-shrink-0 me-3" src="img/car/small-car-3.png" alt="small-car">
                        </a>
                        <div class="detail align-self-center">
                            <h5>
                                <a href="car-details.html">Bentley Continental GT</a>
                            </h5>
                            <div class="listing-post-meta">
                                $345,00 | <a href="#"><i class="fa fa-calendar"></i> Jan 12, 2021</a>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex mb-4 recent-posts-box">
                        <a href="car-details.html">
                            <img class="flex-shrink-0 me-3" src="img/car/small-car-1.png" alt="small-car">
                        </a>
                        <div class="detail align-self-center">
                            <h5>
                                <a href="car-details.html">Fiat Punto Red</a>
                            </h5>
                            <div class="listing-post-meta">
                                $345,00 | <a href="#"><i class="fa fa-calendar"></i> Aug 24, 2021</a>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex recent-posts-box">
                        <a href="car-details.html">
                            <img class="flex-shrink-0 me-3" src="img/car/small-car-2.png" alt="small-car">
                        </a>
                        <div class="detail align-self-center">
                            <h5>
                                <a href="car-details.html">Nissan Micra Gen5</a>
                            </h5>
                            <div class="listing-post-meta">
                                $345,00 | <a href="#"><i class="fa fa-calendar"></i> Sep 24, 2021</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-3 col-md-6 col-sm-6">
                <div class="footer-item clearfix">
                    <h4>Subscribe</h4>
                    <div class="Subscribe-box">
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the</p>
                        <form class="form-inline d-flex" action="#">
                            <input class="form-control" type="email" id="email" placeholder="Email Address...">
                            <button class="btn button-theme" type="submit"><i class="fa fa-paper-plane"></i></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="copy sub-footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <p>© 2021 <a href="#">Theme Vessel.</a> Trademarks and brands are the property of their respective owners.</p>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- Footer end -->

<!-- Full Page Search -->
<div id="full-page-search">
    <button type="button" class="close">×</button>
    <div class="full-page-search-box">
        <form action="index.html#" class="search-boxs">
            <input class="search" type="search" value="" placeholder="type keyword(s) here"/>
            <button type="submit" class="btn btn-sm button-theme">Search</button>
        </form>
    </div>
</div>

<!-- Car Modal 2 -->
<div class="car-model-2">
    <div class="modal fade" id="carOverviewModal" tabindex="-1" role="dialog" aria-labelledby="carOverviewModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="carOverviewModalLabel">
                        Find Your Dream Car
                    </h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row modal-raw">
                        <div class="col-lg-6 modal-left">
                            <div class="modal-left-content">
                                <div class="bs-example" data-example-id="carousel-with-captions">
                                    <div class="carousel slide" id="properties-carousel" data-ride="carousel">
                                        <div class="carousel-inner" role="listbox">
                                            <div class="item active">
                                                <iframe src="https://www.youtube.com/embed/V7IrnC9MISU" allowfullscreen=""></iframe>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 modal-right">
                            <div class="modal-right-content">
                                <section>
                                    <h3>Features</h3>
                                    <div class="features">
                                        <ul class="bullets">
                                            <li>Cruise Control</li>
                                            <li>Airbags</li>
                                            <li>Air Conditioning</li>
                                            <li>Alarm System</li>
                                            <li>Audio Interface</li>
                                            <li>CDR Audio</li>
                                            <li>Seat Heating</li>
                                            <li>ParkAssist</li>
                                        </ul>
                                    </div>
                                </section>
                                <section>
                                    <h3>Overview</h3>
                                    <dl>
                                        <dt>Model</dt>
                                        <dd>Audi</dd>
                                        <dt>Condition</dt>
                                        <dd>Brand New</dd>
                                        <dt>Year</dt>
                                        <dd>2020</dd>
                                        <dt>Price</dt>
                                        <dd>$178,000</dd>
                                    </dl>
                                </section>
                                <div class="dd">
                                    <div class="ratings-2">
                                        <span class="ratings-box">4.5/5</span>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-o"></i>
                                        <span>( 7 Reviews )</span>
                                    </div>
                                    <div class="btns">
                                        <a href="car-details.html" class="btn btn-md btn-round btn-theme">Show Detail</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

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
