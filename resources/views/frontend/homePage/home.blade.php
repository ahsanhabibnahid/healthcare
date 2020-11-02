<!DOCTYPE html>
<html lang="zxx">


<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/img/favicon.ico') }}" />
    <title>Cleveland - Responsive Health And Medical Template</title>
    <!-- Bootstrap core CSS -->
    <link href="{{asset('assets/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Google Font  -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,400i,500,500i,600,700|Raleway:400,400i,500i,600,700" rel="stylesheet">
    <!-- flaticon icon -->
    <link rel="stylesheet" href="{{asset('assets/fonts/icon-font.min.css')}}">
    <!-- icofont icon -->
    <link rel="stylesheet" href="{{asset('assets/fonts/icofont.css')}}">
    <!--- meanmenu Css-->
    <link rel="stylesheet" href="{{asset('assets/css/meanmenu.min.css')}}" media="all" />
    <!-- animate CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/animate.css')}}">
    <!-- SLIDER REVOLUTION 4.x CSS SETTINGS -->
    <link rel="stylesheet" type="text/css" href="{{asset('rs-plugin/css/settings.css')}}" media="screen" />
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/extralayers.css')}}" media="screen" />
    <!--- owl carousel Css-->
    <link rel="stylesheet" href="{{asset('assets/owlcarousel/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/owlcarousel/css/owl.theme.default.min.css')}}">
    <!-- venobox -->
    <link rel="stylesheet" href="{{asset('assets/venobox/css/venobox.css')}}" />
    <!-- Style CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <!-- Responsive  CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/responsive.css')}}">
</head>

<body class="home-2">

<!-- START PRELOADER -->
<div id="page-preloader">
    <div class="preloader-wrench"></div>
</div>
<!-- END PRELOADER -->

<!-- START HEADER SECTION -->
<header class="main-header header-2">
    <!-- START TOP AREA -->
    <div class="top-area">
        <div class="auto-container">
            <div class="row">
                <div class="col-lg-4 col-12">
                    <div class="header-social">
                        <ul>
                            <li><a href="#"><i class="icofont icofont-social-facebook"></i></a></li>
                            <li><a href="#"><i class="icofont icofont-social-twitter"></i></a></li>
                            <li><a href="#"><i class="icofont icofont-social-youtube-play"></i></a></li>
                            <li><a href="#"><i class="icofont icofont-social-google-plus"></i></a></li>
                            <li><a href="#"><i class="icofont icofont-social-pinterest"></i></a></li>
                        </ul>
                    </div>
                </div>
                <!-- end col -->
                <div class="col-lg-4 col-12 text-center mb-lg-0 mb-md-0 mb-3">
                    <p>Welcome to Sensiv Health & Medical Centre </p>
                </div>
                <!-- end col -->
                <div class="col-lg-4 col-12">
                    <div class="header-quote float-right">
                        <a class="header-quote-btn" href="#">Get a Quote <i class="icofont icofont-caret-right"></i></a>
                    </div>
                </div>
                <!-- end col -->
            </div>
        </div>
    </div>
    <!-- END TOP AREA -->

    <!-- START LOGO AREA -->
    <div class="logo-area">
        <div class="auto-container">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-6 col-7 mx-md-auto mx-sm-auto mx-auto pl-0">
                    <div class="logo">
                        <a href="{{ url('/') }}">
                            <img class="img-fluid" src="{{ asset('assets/img/logo.png') }}" alt="">
                        </a>
                    </div>
                </div>
                <!-- end col -->
                <div class="col-1">
                </div>
                <!-- end col -->
                <div class="col-lg-8 col-md-12 col-sm-12 col-12">
                    <div class="mainmenu-area">
                        <div class="auto-container">
                            <div class="d-lg-block d-md-none d-sm-none d-none ">
                                <nav class="navbar navbar-expand-lg justify-content-left">
                                    <ul class="navbar-nav">
                                        <li><a href="{{ url('/') }}" class="nav-link">Home</a></li>
                                        <li class="dropdown"><a href="{{ url('/service') }}   " class="nav-link">Services</a>
                                            <ul class="dropdown-menu">
                                                <li><a href="{{ url('/service') }}   ">Our All Services</a></li>
                                                <li><a href="{{ url('/singleService') }}">Accident & Emergency</a></li>
                                                <li><a href="{{ url('/singleService') }}">Health checks</a></li>
                                                <li><a href="{{ url('/singleService') }}">Home Care</a></li>
                                             <li><a href="{{ url('/singleService') }}">Diabetes & Endocrinology</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="{{ url('/gallery') }}" class="nav-link">Gallery</a></li>
                                        <li class="dropdown"><a href="#" class="nav-link">Pages</a>
                                            <ul class="dropdown-menu">
                                                <li><a href="{{ url('/about') }}">About Sensiv</a></li>
                                                <li><a href="{{ url('/doctors') }}">Our Doctors</a></li>
                                                <li><a href="{{ url('/singleDoctor') }}">Single doctor</a></li>
                                                <li><a href="{{ url('/appointment') }}">Appointment</a></li>
                                                <li><a href="{{ url('/testimonial') }}">Testimonial</a></li>
                                                <li><a href="{{ url('/newPatient') }}">New Patient</a></li>
                                                <li><a href="{{ url('/faq') }}">Faq's</a></li>
                                                <li><a href="{{ url('/reports') }}">Lab Reports</a></li>
                                                <li><a href="{{ url('/404') }}">404 Page</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown"><a href="{{ url('/products') }}" class="nav-link">Shop</a>
                                            <ul class="dropdown-menu">
                                                <li><a href="{{ url('/products') }}">Sensiv Shop</a></li>
                                                <li><a href="{{ url('/singleProduct') }}">Single Product</a></li>
                                                <li><a href="{{ url('/productCheckout') }}">Shop Checkout</a></li>
                                                <li><a href="{{ url('/productCart') }}">Shop Cart</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown"><a href="{{ url('/blog') }}" class="nav-link">Blog</a>
                                            <ul class="dropdown-menu">
                                                <li><a href="{{ url('/blog') }}">Blog</a></li>
                                                <li><a href="{{ url('/blogSingle') }}">Blog Single</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="{{ url('/contact') }}" class="nav-link">Contact</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <!--- END CONTAINER -->
                    </div>
                    <!-- END NAVIGATION AREA -->

                    <!-- MOBILE-MENU-AREA START -->
                    <div class="mobile-menu-area d-lg-none d-md-block d-sm-block d-block">
                        <div class="col-md-9">
                            <div class="mobile-menu">
                                <nav id="dropdown">
                                    <ul class="navbar-nav">
                                        <li><a href="{{ url('/') }}">Home</a>
                                            <ul>
                                                <li><a href="{{ url('/') }}">Home 1</a></li>
                                                <li><a href="{{ url('/') }}">Home 2</a></li>
                                                <li><a href="{{ url('/') }}">Home 3</a></li>
                                                <li><a href="{{ url('/') }}">Home 4</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="{{ url('/service') }}   ">Services</a>
                                            <ul>
                                                <li><a href="{{ url('/service') }}   ">Our All Services</a></li>
                                                <li><a href="{{ url('/singleService') }}">Accident & Emergency</a></li>
                                                <li><a href="{{ url('/singleService') }}">Health checks</a></li>
                                                <li><a href="{{ url('/singleService') }}">Home Care</a></li>
                                                <li><a href="{{ url('/singleService') }}">Diabetes & Endocrinology</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="{{ url('/gallery') }}">Gallery</a></li>
                                        <li><a href="#">Pages</a>
                                            <ul>
                                                <li><a href="{{ url('/about') }}">About Sensiv</a></li>
                                                <li><a href="{{ url('/doctors') }}">Our Doctors</a></li>
                                                <li><a href="{{ url('/singleDoctor') }}">Single doctor</a></li>
                                                <li><a href="{{ url('/appointment') }}">Appointment</a></li>
                                                <li><a href="{{ url('/testimonial') }}">Testimonial</a></li>
                                                <li><a href="{{ url('/newPatient') }}">New Patient</a></li>
                                                <li><a href="{{ url('/faq') }}">Faq's</a></li>
                                                <li><a href="{{ url('/reports') }}">Lab Reports</a></li>
                                                <li><a href="{{ url('/404') }}">404 Page</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="{{ url('/products') }}" class="nav-link">Shop</a>
                                            <ul>
                                                <li><a href="{{ url('/products') }}">Sensiv Shop</a></li>
                                                <li><a href="{{ url('/singleProduct') }}">Single Product</a></li>
                                                <li><a href="{{ url('/productCheckout') }}">Shop Checkout</a></li>
                                                <li><a href="{{ url('/productCart') }}">Shop Cart</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="{{ url('/blog') }}" class="nav-link">Blog</a>
                                            <ul>
                                                <li><a href="{{ url('/blog') }}">Blog</a></li>
                                                <li><a href="{{ url('/blogSingle') }}">Blog Single</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="{{ url('/contact') }}">Contact</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <!-- MOBILE-MENU-AREA END -->
                </div>
                <!-- end col -->
            </div>
        </div>
    </div>
    <!-- END LOGO AREA -->
</header>
<!-- END HEADER SECTION -->

<!-- START SLIDER SECTION -->
<div class="tp-banner-container">
    <div class="tp-banner">
        <ul>
            <!-- SLIDE 1 -->
            <li data-transition="slideup" data-slotamount="1" data-masterspeed="1000" data-delay="10000"  data-saveperformance="off"  data-title="Slide One">
                <!-- MAIN IMAGE -->
                <img src="{{ asset('assets/img/bg/slide4.jpg') }}"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat">
                <!-- LAYERS -->
                <!-- LAYER NR. 1 -->
                <div class="tp-caption sft sfb tp-resizeme rs-parallaxlevel-10"
                     data-x="left" data-hoffset="0"
                     data-y="center" data-voffset="-100"
                     data-speed="1000"
                     data-start="1000"
                     data-endspeed="1200"
                     data-easing="easeOutExpo"
                     data-splitin="none"
                     data-splitout="none"
                     data-elementdelay="0.01"
                     data-endelementdelay="0.1">
                    <div><h2>Your Healthy Life <br> is our Piority</h2></div>
                </div>
                <!-- LAYER NR. 2 -->
                <div class="tp-caption lfb ltt tp-resizeme rs-parallaxlevel-10"
                     data-x="left" data-hoffset="0"
                     data-y="center" data-voffset="-10"
                     data-speed="1200"
                     data-start="1200"
                     data-endspeed="1200"
                     data-easing="easeOutExpo"
                     data-splitin="none"
                     data-splitout="none"
                     data-elementdelay="0.01"
                     data-endelementdelay="0.1">
                    <div><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod <br> tempor incididunt ut labore et dolore magna aliqua.</p></div>
                </div>
                <!-- LAYER NR. 3 -->
                <div class="tp-caption lfb ltt tp-resizeme rs-parallaxlevel-10"
                     data-x="left" data-hoffset="0"
                     data-y="center" data-voffset="65"
                     data-speed="1400"
                     data-start="1400"
                     data-endspeed="1200"
                     data-easing="easeOutExpo"
                     data-splitin="none"
                     data-splitout="none"
                     data-elementdelay="0.01"
                     data-endelementdelay="0.1">
                    <a  href="#" class="home-btn-1">Read More</a> &ensp;&ensp;
                    <a href="#" class="home-btn-2">OUR SERVICES</a>
                </div>
            </li>
            <!-- SLIDE 2 -->
            <li data-transition="slidedown" data-slotamount="1" data-masterspeed="1000" data-delay="10000"  data-saveperformance="off"  data-title="Slide Two">
                <!-- MAIN IMAGE -->
                <img src="{{ asset('assets/img/bg/slide5.jpg') }}"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat">
                <!-- LAYERS -->
                <!-- LAYER NR. 1 -->
                <div class="tp-caption sft sfb tp-resizeme rs-parallaxlevel-10"
                     data-x="left" data-hoffset="0"
                     data-y="center" data-voffset="-100"
                     data-speed="1000"
                     data-start="1000"
                     data-endspeed="1200"
                     data-easing="easeOutExpo"
                     data-splitin="none"
                     data-splitout="none"
                     data-elementdelay="0.01"
                     data-endelementdelay="0.1">
                    <div><h2>Health is biggest gift <br> to your dear ones</h2></div>
                </div>
                <!-- LAYER NR. 2 -->
                <div class="tp-caption lfb ltt tp-resizeme rs-parallaxlevel-10"
                     data-x="left" data-hoffset="0"
                     data-y="center" data-voffset="-10"
                     data-speed="1200"
                     data-start="1200"
                     data-endspeed="1200"
                     data-easing="easeOutExpo"
                     data-splitin="none"
                     data-splitout="none"
                     data-elementdelay="0.01"
                     data-endelementdelay="0.1">
                    <div><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod <br> tempor incididunt ut labore et dolore magna aliqua.</p></div>
                </div>
                <!-- LAYER NR. 3 -->
                <div class="tp-caption lfb ltt tp-resizeme rs-parallaxlevel-10"
                     data-x="left" data-hoffset="0"
                     data-y="center" data-voffset="65"
                     data-speed="1400"
                     data-start="1400"
                     data-endspeed="1200"
                     data-easing="easeOutExpo"
                     data-splitin="none"
                     data-splitout="none"
                     data-elementdelay="0.01"
                     data-endelementdelay="0.1">
                    <a  href="about-us.html" class="home-btn-1">Read More</a> &ensp;&ensp;
                    <a href="{{ url('/service') }}   " class="home-btn-2">OUR SERVICES</a>
                </div>
            </li>
        </ul>
    </div>
</div>
<!-- END SLIDER SECTION  -->

<!-- START ABOUT SECTION -->
<section id="about" class="section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12 col-12 pr-lg-5 pr-md-5 pr-sm-0 pr-0 mb-lg-0 mb-md-0 mb-sm-5 mb-5 about-us-into">
                <h6>Since 1990 - 2020, Battery Park, New York</h6>
                <h3>Welcome to <span>Our Medical</span></h3>
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. </p>
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. </p>
            </div>
            <!-- end col -->
            <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-12">
                        <img class="img-fluid mb-4" src="{{ asset('assets/img/service/1.jpg') }}" alt="">
                        <img class="img-fluid" src="{{ asset('assets/img/service/3.jpg') }}" alt="">
                    </div>
                    <!-- end col -->
                    <div class="col-lg-6 col-md-6 col-12">
                        <img class="img-fluid mb-4" src="{{ asset('assets/img/service/2.jpg') }}" alt="">
                        <img class="img-fluid" src="{{ asset('assets/img/service/4.jpg') }}" alt="">
                    </div>
                    <!-- end col -->
                </div>
            </div>
            <!-- end col -->
        </div>
        <div class="row mt-5">
            <div class="col-lg-6 col-md-6 col-12 mt-2">
                <div class="about-us-into-features mb-5">
                    <div class="about-us-into-features-icon">
                        <i class="icofont icofont-paralysis-disability"></i>
                    </div>
                    <div class="about-us-into-features-text">
                        <h5>Emergency Treatment</h5>
                        <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis eges vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante.</p>
                        <a href="#">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-12 mt-2">
                <div class="about-us-into-features">
                    <div class="about-us-into-features-icon">
                        <i class="icofont icofont-laboratory"></i>
                    </div>
                    <div class="about-us-into-features-text">
                        <h5>High Quality Laboratory</h5>
                        <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis eges vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante.</p>
                        <a href="#">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--- END CONTAINER -->
</section>
<!-- END ABOUT SECTION -->

<!-- START SERViCE SECTION -->
<section id="service" class="section-padding bg-gray">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 text-center mx-auto">
                <div class="section-title">
                    <h3>Our<span> Services</span></h3>
                    <span class="line"></span>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                </div>
            </div>
            <!-- end section title -->
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                <div class="service-two media">
                    <img class="rounded img-fluid align-self-top mt-2 mr-4" src="{{ asset('assets/img/service/1.jpg') }}" alt="">
                    <div class="media-body">
                        <h4>Cancer Care</h4>
                        <p>Cras sit amet nibh libero, in gravida nulla. Nulla velmetus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate.</p>
                        <a class="service-two-link" href="#">Read More</a>
                    </div>
                </div>
            </div>
            <!-- end single service -->
            <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                <div class="service-two media">
                    <img class="rounded img-fluid align-self-top mt-2 mr-4" src="{{ asset('assets/img/service/2.jpg') }}" alt="">
                    <div class="media-body">
                        <h4>HEALTH CHECK</h4>
                        <p>Cras sit amet nibh libero, in gravida nulla. Nulla velmetus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate.</p>
                        <a class="service-two-link" href="#">Read More</a>
                    </div>
                </div>
            </div>
            <!-- end single service -->
            <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                <div class="service-two media">
                    <img class="rounded img-fluid align-self-top mt-2 mr-4" src="{{ asset('assets/img/service/3.jpg') }}" alt="">
                    <div class="media-body">
                        <h4>HOME CARE</h4>
                        <p>Cras sit amet nibh libero, in gravida nulla. Nulla velmetus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate.</p>
                        <a class="service-two-link" href="#">Read More</a>
                    </div>
                </div>
            </div>
            <!-- end single service -->
            <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                <div class="service-two media">
                    <img class="rounded img-fluid align-self-top mt-2 mr-4" src="{{ asset('assets/img/service/4.jpg') }}" alt="">
                    <div class="media-body">
                        <h4>GENERAL SURGERY</h4>
                        <p>Cras sit amet nibh libero, in gravida nulla. Nulla velmetus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate.</p>
                        <a class="service-two-link" href="#">Read More</a>
                    </div>
                </div>
            </div>
            <!-- end single service -->
            <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                <div class="service-two media">
                    <img class="rounded img-fluid align-self-top mt-2 mr-4" src="{{ asset('assets/img/service/5.jpg') }}" alt="">
                    <div class="media-body">
                        <h4>Dental Medicine</h4>
                        <p>Cras sit amet nibh libero, in gravida nulla. Nulla velmetus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate.</p>
                        <a class="service-two-link" href="#">Read More</a>
                    </div>
                </div>
            </div>
            <!-- end single service -->
            <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                <div class="service-two media">
                    <img class="rounded img-fluid align-self-top mt-2 mr-4" src="{{ asset('assets/img/service/6.jpg') }}" alt="">
                    <div class="media-body">
                        <h4>Cancer Care</h4>
                        <p>Cras sit amet nibh libero, in gravida nulla. Nulla velmetus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate.</p>
                        <a class="service-two-link" href="#">Read More</a>
                    </div>
                </div>
            </div>
            <!-- end single service -->
        </div>
        <!--- END ROW -->
    </div>
    <!--- END CONTAINER -->
</section>
<!-- END SERViCE SECTION -->

<!-- START GALLERY SECTION -->
<section id="gallery" class="section-padding">
    <div class="auto-container">
        <div class="row">
            <div class="col-lg-7 text-center mx-auto">
                <div class="section-title">
                    <h3>Photo<span> Gallery</span></h3>
                    <span class="line"></span>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                </div>
            </div>
            <!-- end section title -->
        </div>
        <div class="row mb-5">
            <div class="col-lg-12">
                <div class="portfolio-filter-menu wow fadeInUp">
                    <ul>
                        <li class="filter active" data-filter="all">
                            <i class="icofont icofont-listine-dots"></i>
                            Show All Image
                        </li>
                        <li class="filter" data-filter=".one">
                            <i class="icofont icofont-paralysis-disability"></i>
                            Home Care
                        </li>
                        <li class="filter" data-filter=".two">
                            <i class="icofont icofont-pills"></i>
                            Diabetes Solution
                        </li>
                        <li class="filter" data-filter=".three">
                            <i class="icofont icofont-surgeon"></i>
                            Bariatric Surgery
                        </li>
                        <li class="filter" data-filter=".four">
                            <i class="icofont icofont-paralysis-disability"></i>
                            Dental Medicine
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="portfolio-items">
            <div class="row text-center">
                <div class="col-lg-4 col-md-4 col-sm-12 col-12 mix one two four">
                    <div class="single-gallery-item">
                        <div class="single-gallery single-gallery-first">
                            <img class="img-fluid" src="{{ asset('assets/img/gallery/4.jpg') }}" alt="" />
                            <div class="single-gallery">
                                <div class="single-gallery-inner">
                                    <h5>Gallery Title</h5>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing.</p>
                                    <a href="#" class="info"><i class="icofont icofont-link"></i></a>
                                    <a href="{{ asset('assets/img/gallery/1.jpg') }}" class="venobox info" data-title="PORTFOLIO TITTLE" data-gall="gall1"><i class="icofont icofont-expand"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end single portfolio -->
                <div class="col-lg-4 col-md-4 col-sm-12 col-12 mix two">
                    <div class="single-gallery-item">
                        <div class="single-gallery single-gallery-first">
                            <img class="img-fluid" src="{{ asset('assets/img/gallery/1.jpg') }}" alt="" />
                            <div class="single-gallery">
                                <div class="single-gallery-inner">
                                    <h5>Gallery Title</h5>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing.</p>
                                    <a href="#" class="info"><i class="icofont icofont-link"></i></a>
                                    <a href="{{ asset('assets/img/gallery/1.jpg') }}" class="venobox info" data-title="PORTFOLIO TITTLE" data-gall="gall1"><i class="icofont icofont-expand"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end single portfolio -->
                <div class="col-lg-4 col-md-4 col-sm-12 col-12 mix two">
                    <div class="single-gallery-item">
                        <div class="single-gallery single-gallery-first">
                            <img class="img-fluid" src="{{ asset('assets/img/gallery/2.jpg') }}" alt="" />
                            <div class="single-gallery">
                                <div class="single-gallery-inner">
                                    <h5>Gallery Title</h5>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing.</p>
                                    <a href="#" class="info"><i class="icofont icofont-link"></i></a>
                                    <a href="{{ asset('assets/img/gallery/1.jpg') }}" class="venobox info" data-title="PORTFOLIO TITTLE" data-gall="gall1"><i class="icofont icofont-expand"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end single portfolio -->
                <div class="col-lg-4 col-md-4 col-sm-12 col-12 mix one three">
                    <div class="single-gallery-item">
                        <div class="single-gallery single-gallery-first">
                            <img class="img-fluid" src="{{ asset('assets/img/gallery/2.jpg') }}" alt="" />
                            <div class="single-gallery">
                                <div class="single-gallery-inner">
                                    <h5>Gallery Title</h5>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing.</p>
                                    <a href="#" class="info"><i class="icofont icofont-link"></i></a>
                                    <a href="{{ asset('assets/img/gallery/1.jpg') }}" class="venobox info" data-title="PORTFOLIO TITTLE" data-gall="gall1"><i class="icofont icofont-expand"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end single portfolio -->
                <div class="col-lg-4 col-md-4 col-sm-12 col-12 mix one three">
                    <div class="single-gallery-item">
                        <div class="single-gallery single-gallery-first">
                            <img class="img-fluid" src="{{ asset('assets/img/gallery/3.jpg') }}" alt="" />
                            <div class="single-gallery">
                                <div class="single-gallery-inner">
                                    <h5>Gallery Title</h5>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing.</p>
                                    <a href="#" class="info"><i class="icofont icofont-link"></i></a>
                                    <a href="{{ asset('assets/img/gallery/1.jpg') }}" class="venobox info" data-title="PORTFOLIO TITTLE" data-gall="gall1"><i class="icofont icofont-expand"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end single portfolio -->
                <div class="col-lg-4 col-md-4 col-sm-12 col-12 mix one three four">
                    <div class="single-gallery-item">
                        <div class="single-gallery single-gallery-first">
                            <img class="img-fluid" src="{{ asset('assets/img/gallery/4.jpg') }}" alt="" />
                            <div class="single-gallery">
                                <div class="single-gallery-inner">
                                    <h5>Gallery Title</h5>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing.</p>
                                    <a href="#" class="info"><i class="icofont icofont-link"></i></a>
                                    <a href="{{ asset('assets/img/gallery/1.jpg') }}" class="venobox info" data-title="PORTFOLIO TITTLE" data-gall="gall1"><i class="icofont icofont-expand"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end single portfolio -->
            </div>
        </div>
    </div>
    <!--- END CONTAINER -->
</section>
<!-- END GALLERY SECTION -->


<!-- START VIDEO & FAQ -->
<section id="videofaq" class="section-padding pt-0">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12 col-12 pr-lg-5 pr-md-5 pr-sm-0 pr-0 mb-lg-0 mb-md-0 mb-sm-5 mb-5">
                <div class="text-left">
                    <div class="section-title section-title-left">
                        <h3>Frequently <span>Asked Question</span></h3>
                        <span class="line"></span>
                    </div>
                </div>
                <!-- end section title -->
                <div class="panel-group faq-home-accor" id="accordion">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h5 class="panel-title">
                                <i class="icofont icofont-thin-down"></i> <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#panel1">What are the lab charges ?</a>
                            </h5>
                        </div>
                        <div id="panel1" class="panel-collapse collapse show">
                            <div class="panel-body">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua Ut enim ad minim veniam, quis nostrud.</p>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h5 class="panel-title">
                                <i class="icofont icofont-thin-right"></i> <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#panel2">How to get appointment?</a>
                            </h5>
                        </div>
                        <div id="panel2" class="panel-collapse collapse">
                            <div class="panel-body">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua Ut enim ad minim veniam, quis nostrud.</p>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h5 class="panel-title">
                                <i class="icofont icofont-thin-right"></i> <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#panel3">How to book health check?</a>
                            </h5>
                        </div>
                        <div id="panel3" class="panel-collapse collapse">
                            <div class="panel-body">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua Ut enim ad minim veniam, quis nostrud.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end col -->
            <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                <div class="text-left">
                    <div class="section-title section-title-left">
                        <h3>Our Hospital <span>Promo Video </span></h3>
                        <span class="line"></span>
                    </div>
                </div>
                <!-- end section title -->
                <div class="youtube-promo-video-wrap">
                    <div class="youtube-promo-video-img">
                        <img class="img-fluid" src="{{ asset('assets/img/bg/video.jpg') }}" alt="">
                    </div>
                    <div class="youtube-promo-video">
                        <a href="https://www.youtube.com/watch?v=U6tSjIAGaTU" data-title="PORTFOLIO YOUTUBE VIDEO"
                           data-vbtype="youtube" class="venobox info vbox-item" data-gall="gallu"><i class="icofont icofont-youtube-play"></i></a>
                    </div>
                </div>
            </div>
            <!-- end col -->
        </div>
    </div>
    <!--- END CONTAINER -->
</section>
<!-- END VIDEO & FAQ -->

<!-- START DOCTOR SECTION -->
<section id="doctor" class="section-padding bg-gray">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 text-center mx-auto">
                <div class="section-title">
                    <h3>Our<span> Specialities</span></h3>
                    <span class="line"></span>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                </div>
            </div>
            <!-- end section title -->
        </div>
        <div class="row">
            <div class="team-slider owl-carousel owl-theme">
                <div class="single-doctor single-doctor-warp">
                    <img class="img-fluid" src="{{ asset('assets/img/team/5.jpg') }}" alt="" />
                    <div class="single-doctor-info">
                        <h4>Revenna Warner</h4>
                        <span>Neurologist</span>
                    </div>
                    <div class="single-doctor-mask">
                        <div class="single-doctor-mask-inner">
                            <h5>About Doctor</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>
                            <ul>
                                <li><a href="#">Get Appointment</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- end single doctor -->
                <div class="single-doctor single-doctor-warp">
                    <img class="img-fluid" src="{{ asset('assets/img/team/4.jpg') }}" alt="" />
                    <div class="single-doctor-info">
                        <h4>Stevest Henry</h4>
                        <span>Ophthalmologist</span>
                    </div>
                    <div class="single-doctor-mask">
                        <div class="single-doctor-mask-inner">
                            <h5>About Doctor</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>
                            <ul>
                                <li><a href="#">Get Appointment</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- end single doctor -->
                <div class="single-doctor single-doctor-warp">
                    <img class="img-fluid" src="{{ asset('assets/img/team/3.jpg') }}" alt="" />
                    <div class="single-doctor-info">
                        <h4>Williums Kevins</h4>
                        <span>Dermatologist</span>
                    </div>
                    <div class="single-doctor-mask">
                        <div class="single-doctor-mask-inner">
                            <h5>About Doctor</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>
                            <ul>
                                <li><a href="#">Get Appointment</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- end single doctor -->
                <div class="single-doctor single-doctor-warp">
                    <img class="img-fluid" src="{{ asset('assets/img/team/1.jpg') }}" alt="" />
                    <div class="single-doctor-info">
                        <h4>Kewillues Jenifer</h4>
                        <span>Radiologist</span>
                    </div>
                    <div class="single-doctor-mask">
                        <div class="single-doctor-mask-inner">
                            <h5>About Doctor</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>
                            <ul>
                                <li><a href="#">Get Appointment</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- end single doctor -->
                <div class="single-doctor single-doctor-warp">
                    <img class="img-fluid" src="{{ asset('assets/img/team/2.jpg') }}" alt="" />
                    <div class="single-doctor-info">
                        <h4>Marquis Williums</h4>
                        <span>Urologist</span>
                    </div>
                    <div class="single-doctor-mask">
                        <div class="single-doctor-mask-inner">
                            <h5>About Doctor</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>
                            <ul>
                                <li><a href="#">Get Appointment</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- end single doctor -->
            </div>
        </div>
    </div>
    <!--- END CONTAINER -->
</section>
<!-- END DOCTOR SECTION -->

<!-- START BLOG SERCTION -->
<section id="blog" class="section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 text-center mx-auto">
                <div class="section-title">
                    <h3>Today's<span> News</span></h3>
                    <span class="line"></span>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                </div>
            </div>
            <!-- end section title -->
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-12 col-12 mb-lg-0 mb-md-4 mb-sm-4 mb-4">
                <div class="single-blog-home">
                    <div class="single-blog-home-img">
                        <a href="#"><img class="img-fluid" src="{{ asset('assets/img/blog/1.jpg') }}" alt=""></a>
                        <div class="single-blog-home-meta">
                            <span class="post-date"><i class="lnr lnr-calendar-full"></i> 15 Dec</span>
                            <span class="post-user"><i class="lnr lnr-user"></i> Admin</span>
                            <span class="post-comment"><i class="lnr lnr-bubble"></i> 5 comments</span>
                        </div>
                    </div>
                    <a href="#"><h5>Digital Bariatric Surgery</h5></a>
                    <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis eges vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante.</p>
                    <a href="#" class="blog-home-rmbtn">Continue <i class="icofont icofont-long-arrow-right"></i></a>
                </div>
            </div>
            <!-- end single blog -->
            <div class="col-lg-4 col-md-6 col-sm-12 col-12 mb-lg-0 mb-md-4 mb-sm-4 mb-4">
                <div class="single-blog-home">
                    <div class="single-blog-home-img">
                        <a href="#"><img class="img-fluid" src="{{ asset('assets/img/blog/3.jpg') }}" alt=""></a>
                        <div class="single-blog-home-meta">
                            <span class="post-date"><i class="lnr lnr-calendar-full"></i> 16 Dec</span>
                            <span class="post-user"><i class="lnr lnr-user"></i> Jone</span>
                            <span class="post-comment"><i class="lnr lnr-bubble"></i> 6 comments</span>
                        </div>
                    </div>
                    <a href="#"><h5>Obesity: A Growing Epidemic</h5></a>
                    <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis eges vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante.</p>
                    <a href="#" class="blog-home-rmbtn">Continue <i class="icofont icofont-long-arrow-right"></i></a>
                </div>
            </div>
            <!-- end single blog -->
            <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                <div class="single-blog-home">
                    <div class="single-blog-home-img">
                        <a href="#"><img class="img-fluid" src="{{ asset('assets/img/blog/2.jpg') }}" alt=""></a>
                        <div class="single-blog-home-meta">
                            <span class="post-date"><i class="lnr lnr-calendar-full"></i> 17 Dec</span>
                            <span class="post-user"><i class="lnr lnr-user"></i> Admin</span>
                            <span class="post-comment"><i class="lnr lnr-bubble"></i> 7 comments</span>
                        </div>
                    </div>
                    <a href="#"><h5>After Surgery Bed Rest</h5></a>
                    <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis eges vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante.</p>
                    <a href="#" class="blog-home-rmbtn">Continue <i class="icofont icofont-long-arrow-right"></i></a>
                </div>
            </div>
            <!-- end single blog -->
        </div>
    </div>
    <!--- END CONTAINER -->
</section>
<!-- END BLOG SERCTION -->

<!-- SINGLE DOCTOR PROMO -->
<div class="single-doc-promo bg-theme mt-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-12 col-12">
                <div class="single-doc-promo-box-img">
                    <img class="img-fluid" src="{{ asset('assets/img/bg/doc-promo.png') }}" alt="">
                </div>
            </div>
            <div class="col-lg-9 col-md-9 col-sm-12 col-12">
                <div class="single-doc-promo-box">
                    <div class="row">
                        <div class="col-lg-9">
                            <div class="single-doc-promo-content">
                                <h5>If you need any home service</h5>
                                <p>Feel free to call us 24hr emergency number</p>
                                <a href="#"><i class="icofont icofont-phone"></i>+88 315 67 39</a>
                            </div>
                        </div>
                        <div class="col-lg-3 mt-4">
                            <a href="#" class="single-doc-promo-btn fadeInUp animated">Contact Us</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END SINGLE DOCTOR PROMO -->

<!-- START FOOTER -->
<footer>
    <!--Footer top -->
    <div class="footer-top">
        <div class="auto-container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-12 col-12  mb-lg-0 mb-md-4 mb-sm-5 mb-5 footer-widget">
                    <div class="footer-section-title col-12 p-0 mb-4">
                        <h5>About Us</h5>
                    </div>
                    <!-- end widget title -->
                    <div class="about">
                        <p>Sensiv Hospitals is one of the most multi-specialty healthcare provider catering to both native & foreigner patients.</p>
                        <p>Manage your health the easier way with the Sensiv Hospital mobile app. Download it today! Available on.</p>
                    </div>
                    <div class="footer-logo mt-3">
                        <a href="{{ url('/') }}">
                            <div class="footer-logo-icon">
                                <i class="icofont icofont-bed-patient"></i>
                            </div>
                            <div class="footer-logo-text">
                                <h3>Sensiv</h3>
                                <p>Medical template</p>
                            </div>
                        </a>
                    </div>
                </div>
                <!-- End Widget -->
                <div class="col-lg-2 col-md-6 col-sm-12 col-12  mb-lg-0 mb-md-4 mb-sm-5 mb-5 footer-widget">
                    <div class="footer-section-title col-12 p-0 mb-4">
                        <h5>Quick Links</h5>
                    </div>
                    <!-- end widget title -->
                    <ul class="quick-link-list">
                        <li><a href="#"><i class="icofont icofont-circled-right"></i> Home Page</a></li>
                        <li><a href="#"><i class="icofont icofont-circled-right"></i> About Us</a></li>
                        <li><a href="#"><i class="icofont icofont-circled-right"></i> Sensiv Services</a></li>
                        <li><a href="#"><i class="icofont icofont-circled-right"></i> Our Doctors</a></li>
                        <li><a href="#"><i class="icofont icofont-circled-right"></i> All Departments</a></li>
                        <li><a href="#"><i class="icofont icofont-circled-right"></i> Popular Doctors</a></li>
                        <li><a href="#"><i class="icofont icofont-circled-right"></i> Patient Feedback</a></li>
                        <li><a href="#"><i class="icofont icofont-circled-right"></i> Latest News</a></li>
                    </ul>
                </div>
                <!-- End Widget -->
                <div class="col-lg-4 col-md-6 col-sm-12 col-12  mb-lg-0 mb-md-0 mb-sm-5 mb-5 footer-widget">
                    <div class="footer-section-title col-12 p-0 mb-4">
                        <h5>Flickr Feed</h5>
                    </div>
                    <!-- end widget title -->
                    <div class="flick-post">
                        <div class="single-flick-post">
                            <a href="#"><img class="img-fluid" src="{{ asset('assets/img/gallery/4.jpg') }}" alt=""></a>
                            <a href="{{ asset('assets/img/gallery/4.jpg') }}" class="venobox info icon vbox-item" data-title="FLICKR TITTLE" data-gall="gall1"><i class="icofont icofont-link"></i></a>
                        </div>
                        <div class="single-flick-post">
                            <a href="#"><img class="img-fluid" src="{{ asset('assets/img/gallery/3.jpg') }}" alt=""></a>
                            <a href="{{ asset('assets/img/gallery/3.jpg') }}" class="venobox info icon vbox-item" data-title="FLICKR TITTLE" data-gall="gall1"><i class="icofont icofont-link"></i></a>
                        </div>
                        <div class="single-flick-post">
                            <a href="#"><img class="img-fluid" src="{{ asset('assets/img/gallery/5.jpg') }}" alt=""></a>
                            <a href="{{ asset('assets/img/gallery/5.jpg') }}" class="venobox info icon vbox-item" data-title="FLICKR TITTLE" data-gall="gall1"><i class="icofont icofont-link"></i></a>
                        </div>
                        <div class="single-flick-post">
                            <a href="#"><img class="img-fluid" src="{{ asset('assets/img/gallery/1.jpg') }}" alt=""></a>
                            <a href="{{ asset('assets/img/gallery/1.jpg') }}" class="venobox info icon vbox-item" data-title="FLICKR TITTLE" data-gall="gall1"><i class="icofont icofont-link"></i></a>
                        </div>
                        <div class="single-flick-post">
                            <a href="#"><img class="img-fluid" src="{{ asset('assets/img/gallery/2.jpg') }}" alt=""></a>
                            <a href="{{ asset('assets/img/gallery/2.jpg') }}" class="venobox info icon vbox-item" data-title="FLICKR TITTLE" data-gall="gall1"><i class="icofont icofont-link"></i></a>
                        </div>
                        <div class="single-flick-post">
                            <a href="#"><img class="img-fluid" src="{{ asset('assets/img/gallery/10.jpg') }}" alt=""></a>
                            <a href="{{ asset('assets/img/gallery/10.jpg') }}" class="venobox info icon vbox-item" data-title="FLICKR TITTLE" data-gall="gall1"><i class="icofont icofont-link"></i></a>
                        </div>
                    </div>
                </div>
                <!-- End Widget -->
                <div class="col-lg-3 col-md-6 col-sm-12 col-12 footer-widget">
                    <div class="footer-section-title col-12 p-0 mb-4">
                        <h5>Stay With us</h5>
                    </div>
                    <!-- end widget title -->
                    <ul class="quick-link-list">
                        <li><a href="#"><i class="lnr lnr-map-marker"></i> 10004, Battery Park, New York</a></li>
                        <li><a href="#"><i class="lnr lnr-envelope "></i> info@yoursite.com</a></li>
                        <li><a href="#"><i class="lnr lnr-phone "></i> +0 123-456-7890</a></li>
                        <li><a href="#"><i class="icofont icofont-clock-time"></i> Open: Mon to Sat: 9AM to 5PM</a></li>
                    </ul>
                    <div class="footer-section-title col-12 p-0 mt-4 mb-4">
                        <h5>Get Connected</h5>
                    </div>
                    <!-- end widget title -->
                    <div class="footer-social">
                        <ul>
                            <li><a href="#"><i class="icofont icofont-social-facebook"></i></a></li>
                            <li><a href="#"><i class="icofont icofont-social-twitter"></i></a></li>
                            <li><a href="#"><i class="icofont icofont-social-youtube-play"></i></a></li>
                            <li><a href="#"><i class="icofont icofont-social-google-plus"></i></a></li>
                        </ul>
                    </div>
                </div>
                <!-- End Widget -->
            </div>
        </div>
    </div>
    <div class="copyright">
        <div class="auto-container">
            <div class="row">
                <div class="col-12 text-center copyright-text">
                    <p>Copyright © 2018 <a href="#"> Sensiv.</a> | All Rights Reserved</p>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- END FOOTER -->


<!-- Latest jQuery -->
<script src="{{ asset('assets/js/jquery-2.2.4.min.js') }}"></script>
<!-- popper js -->
<script src="{{ asset('assets/bootstrap/js/popper.min.js') }}"></script>
<!-- Latest compiled and minified Bootstrap -->
<script src="assets/bootstrap/js/bootstrap.min.js') }}"></script>
<!-- meanmenu min js  -->
<script src="{{ asset('assets/js/jquery.meanmenu.min.js') }}"></script>
<!-- Sticky JS -->
<script src="{{ asset('assets/js/jquery.sticky.js') }}"></script>
<!-- SLIDER REVOLUTION 4.x SCRIPTS  -->
<script src="{{ asset('rs-plugin/js/jquery.themepunch.plugins.min.js') }}"></script>
<script src="{{ asset('rs-plugin/js/jquery.themepunch.revolution.min.js') }}"></script>
<!-- gijgo js  -->
<script src="{{ asset('assets/js/gijgo.js') }}"></script>
<!-- owl-carousel min js  -->
<script src="{{ asset('assets/owlcarousel/js/owl.carousel.min.js') }}"></script>
<!-- jquery appear js  -->
<script src="{{ asset('assets/js/jquery.appear.js') }}"></script>
<!-- countTo js -->
<script src="{{ asset('assets/js/jquery.inview.min.js') }}"></script>
<!-- jquery mixitup js -->
<script src="{{ asset('assets/js/jquery.mixitup.min.js') }}"></script>
<!-- venobox js -->
<script src="{{ asset('assets/venobox/js/venobox.min.js') }}"></script>
<!-- scrolltopcontrol js -->
<script src="{{ asset('assets/js/scrolltopcontrol.js') }}"></script>
<!-- WOW - Reveal Animations When You Scroll -->
<script src="{{ asset('assets/js/wow.min.js') }}"></script>') }}
<!-- scripts js -->
<script src="{{ asset('assets/js/scripts.js') }}"></script>
<script>
    jQuery(document).ready(function() {
        jQuery('.tp-banner').show().revolution(
            {
                dottedOverlay:"none",
                delay:16000,
                startwidth:1170,
                startheight:550,
                hideThumbs:200,

                thumbWidth:100,
                thumbHeight:50,
                thumbAmount:5,

                navigationType:"bullet",
                navigationArrows:"solo",
                navigationStyle:"preview4",

                touchenabled:"on",
                onHoverStop:"on",

                swipe_velocity: 0.7,
                swipe_min_touches: 1,
                swipe_max_touches: 1,
                drag_block_vertical: false,

                parallax:"mouse",
                parallaxBgFreeze:"on",
                parallaxLevels:[7,4,3,2,5,4,3,2,1,0],

                keyboardNavigation:"off",

                navigationHAlign:"center",
                navigationVAlign:"bottom",
                navigationHOffset:0,
                navigationVOffset:20,

                soloArrowLeftHalign:"left",
                soloArrowLeftValign:"center",
                soloArrowLeftHOffset:20,
                soloArrowLeftVOffset:0,

                soloArrowRightHalign:"right",
                soloArrowRightValign:"center",
                soloArrowRightHOffset:20,
                soloArrowRightVOffset:0,

                shadow:0,
                fullWidth:"on",
                fullScreen:"off",

                spinner:"spinner4",

                stopLoop:"off",
                stopAfterLoops:-1,
                stopAtSlide:-1,

                shuffle:"off",

                autoHeight:"off",
                forceFullWidth:"off",


                hideThumbsOnMobile:"off",
                hideNavDelayOnMobile:1500,
                hideBulletsOnMobile:"off",
                hideArrowsOnMobile:"off",
                hideThumbsUnderResolution:0,

                hideSliderAtLimit:0,
                hideCaptionAtLimit:0,
                hideAllCaptionAtLilmit:0,
                startWithSlide:0,
                fullScreenOffsetContainer: ""
            });
    });	//ready

</script>
</body>


</html>
