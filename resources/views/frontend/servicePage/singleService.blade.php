@extends('frontend.layout.master')

@section('content')


    <!-- START SERVICE SECTION -->
    <section id="service" class="section-padding">
        <div class="auto-container">
            <div class="row">
                <aside class="col-lg-4 col-md-4 col-sm-12 col-12 mb-lg-0 mb-md-0 mb-sm-5 mb-5 pr-lg-5 pr-md-5 pr-sm-0 pr-0">
                    <div class="sidebar-widget">
                        <h5 class="widget-title">Popular Services</h5>
                        <!-- end widget tittle-->
                        <div class="servide-list">
                            <a href="#">View All</a>
                            <div class="servide-list-drop">
                                <div class="form-group">
                                    <select class="form-control" id="serviceselect">
                                        <option>Most Popular</option>
                                        <option>Baby Care</option>
                                        <option>Cancer Care</option>
                                        <option>Enrage Surgery</option>
                                    </select>
                                </div>
                            </div>
                            <ul>
                                <li><a href="#"><i class="icofont icofont-blood"></i> Accident & Emergency</a> </li>
                                <li class="active"><a href="#"><i class="icofont icofont-stethoscope-alt"></i> Health checks</a> </li>
                                <li><a href="#"><i class="icofont icofont-prescription"></i> Home Care</a> </li>
                                <li><a href="#"><i class="icofont icofont-autism"></i> Diabetes & Endocrinology</a> </li>
                                <li><a href="#"><i class="icofont icofont-test-bottle"></i> Bariatric Surgery</a> </li>
                                <li><a href="#"><i class="icofont icofont-paralysis-disability"></i> Dental Medicine</a> </li>
                            </ul>
                        </div>
                    </div>
                    <!-- end widget -->
                    <div class="sidebar-widget">
                        <h5 class="widget-title">Download Bouchers</h5>
                        <!-- end widget tittle-->
                        <div class="servide-list">
                            <ul>
                                <li><a href="#"><i class="icofont icofont-file-pdf"></i> Download.Pdf</a> </li>
                                <li><a href="#"><i class="icofont icofont-file-powerpoint"></i> Download.Ppt</a> </li>
                                <li><a href="#"><i class="icofont icofont-law-document"></i> Download.Doc</a> </li>
                            </ul>
                        </div>
                    </div>
                    <!-- end widget -->
                    <div class="sidebar-widget">
                        <h5 class="widget-title">Contact Support</h5>
                        <!-- end widget tittle-->
                        <div class="contact-wid text-center">
                            <div class="contact-wid-icon">
                                <i class="icofont icofont-live-support"></i>
                            </div>
                            <p><a href="#"><i class="icofont icofont-phone"></i> +88 315 67 39</a></p>
                        </div>
                    </div>
                    <!-- end widget -->
                    <div class="sidebar-widget">
                        <h5 class="widget-title">Popular Doctors</h5>
                        <!-- end widget tittle-->
                        <div class="related_doc_widget">
                            <div class="blog-singleRecpost">
                                <img class="img-fluid" src="assets/img/team/tes1.jpg" alt="">
                                <h5 class="blog-recTitle">
                                    <a href="#">Stevest Henry</a>
                                </h5>
                                <p>Ophthalmologist</p>
                            </div>
                            <div class="blog-singleRecpost">
                                <img class="img-fluid" src="assets/img/team/tes2.jpg" alt="">
                                <h5 class="blog-recTitle">
                                    <a href="#">Williums Kevins</a>
                                </h5>
                                <p>Dermatologist</p>
                            </div>
                            <div class="blog-singleRecpost">
                                <img class="img-fluid" src="assets/img/team/tes1.jpg" alt="">
                                <h5 class="blog-recTitle">
                                    <a href="#">Kewillues Jenifer</a>
                                </h5>
                                <p>Radiologist</p>
                            </div>
                        </div>
                    </div>
                    <!-- end widget -->
                </aside>
                <div class="col-lg-8 col-md-8 col-sm-12 col-12">
                    <div class="image-tab">
                        <div class="row">
                            <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12 pr-0 mb-2">
                                <div id="tabsJustifiedContent" class="tab-content">
                                    <div id="one" class="tab-pane animated fadeInRight active show">
                                        <img class="img-fluid" src="assets/img/service/7.jpg" alt="">
                                    </div>
                                    <div id="two" class="tab-pane animated fadeInRight">
                                        <img class="img-fluid" src="assets/img/service/8.jpg" alt="">
                                    </div>
                                    <div id="three" class="tab-pane animated fadeInRight">
                                        <img class="img-fluid" src="assets/img/service/9.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 c0l-sm-12 col-xs-12 pr-lg-3 pr-md-3 pr-sm-0 pr-0">
                                <ul id="tabsJustified" class="nav nav-tabs text-center">
                                    <li class="nav-item">
                                        <a href="#" data-target="#one" data-toggle="tab" class="nav-link active">
                                            <img class="img-fluid" src="assets/img/service/t2.jpg" alt="">
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#" data-target="#two" data-toggle="tab" class="nav-link">
                                            <img class="img-fluid" src="assets/img/service/t1.jpg" alt="">
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#" data-target="#three" data-toggle="tab" class="nav-link">
                                            <img class="img-fluid" src="assets/img/service/t3.jpg" alt="">
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-lg-12">
                            <h4>Lorem ipsum dolor sit amet</h4>
                            <hr>
                            <p class="mb-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                            <div class="row mt-3">
                                <div class="col-lg-4 col-md-4 col-sm-12 col-12">
                                    <img class="img-fluid" src="assets/img/blog/3.jpg" alt="">
                                </div>
                                <div class="col-lg-8 col-md-8 col-sm-12 col-12">
                                    <div class="row">
                                        <div class="col-12">
                                            <ul>
                                                <li><i class="icofont icofont-simple-right"></i> Lorem ipsum dolor sit amet, consectetur adipiscing elit labore sdo</li>
                                                <li><i class="icofont icofont-simple-right"></i> Sed do eiusmod tempor incididunt ut labore et dolore magna aliqu </li>
                                                <li><i class="icofont icofont-simple-right"></i> Ut enim ad minim veniam, quis nostrud exercitation ullamco labori </li>
                                                <li><i class="icofont icofont-simple-right"></i> Excepteur sint occaecat cupidatat non proident, sunt in culpa quilb </li>
                                                <li><i class="icofont icofont-simple-right"></i> Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-5">
                                <div class="col-lg-12">
                                    <h4>Service Promo Video</h4>
                                    <hr>
                                    <div class="service-tab-list">
                                        <div class="row mt-3">
                                            <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-12 col-12 mb-lg-0 mb-md-3 mb-sm-3 mb-3">
                                                <div class="youtube-promo-two-video-wrap">
                                                    <div class="youtube-promo-two-video-img">
                                                        <img class="img-fluid" src="assets/img/bg/video.jpg" alt="">
                                                    </div>
                                                    <div class="youtube-promo-two-video">
                                                        <a href="https://www.youtube.com/watch?v=U6tSjIAGaTU" data-title="PORTFOLIO YOUTUBE VIDEO" data-vbtype="youtube" class="venobox info vbox-item" data-gall="gallu"><i class="icofont icofont-youtube-play"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-5">
                                <div class="col-lg-12">
                                    <div id="chartContainer"></div>
                                </div>
                            </div>
                            <div class="row mt-5">
                                <div class="col-lg-12">
                                    <h4>Services regular question</h4>
                                    <hr>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-8 col-md-8 col-sm-12 col-12 pr-lg-5 pr-md-5 pr-sm-0 pr-0 mb-lg-0 mb-md-0 mb-sm-5 mb-5">
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
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-12 col-12">
                                    <div class="free-quote-box">
                                        <h6>Ask question</h6>
                                        <h3>Support is ready</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy. </p>
                                        <a href="#">Free quote <i class="icofont icofont-simple-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--- END CONTAINER -->
    </section>
    <!-- END SERVICE SECTION -->

    <!-- SINGLE DOCTOR PROMO -->
    <div class="single-doc-promo bg-theme mt-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-12 col-12">
                    <div class="single-doc-promo-box-img">
                        <img class="img-fluid" src="assets/img/bg/doc-promo.png" alt="">
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

@endsection
