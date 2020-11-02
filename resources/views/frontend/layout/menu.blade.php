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
