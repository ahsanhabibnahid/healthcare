@extends('frontend.layout.master')

@section('content')


    <!-- START ABOUT SECTION -->
<section id="about" class="section-padding">
    <div class="auto-container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12 col-12 pr-lg-5 pr-md-5 pr-sm-0 pr-0 mb-lg-0 mb-md-0 mb-sm-5 mb-5 about-us-into">
                <h6>Since 1990 - 2020, Battery Park, New York</h6>
                <h3>Welcome to <span>Our Medical</span></h3>
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. </p>
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. </p>
                <a href="#" class="about-us-into-btn">Learn More <i class="icofont icofont-caret-right"></i></a>
            </div>
            <!-- end col -->
            <div class="col-lg-6 col-md-6 col-sm-12 col-12">
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
            <!-- end col -->
        </div>
    </div>
    <!--- END CONTAINER -->
</section>
<!-- END ABOUT SECTION -->


<!-- START ABOUT SLIDER -->
<div id="about-slider" class="section-padding p-0">
    <div class="container">
        <div class="row">
            <div class="col-10 mx-auto">
                <div class="about-slider owl-carousel owl-theme">
                    <div class="about-slider-item">
                        <img class="img-fluid" src="assets/img/bg/s3.png" alt="" />
                    </div>
                    <div class="about-slider-item">
                        <img class="img-fluid" src="assets/img/bg/s5.png" alt="" />
                    </div>
                </div>
            </div>
        </div>
        <!-- end row -->
    </div>
    <!--- END CONTAINER -->
</div>
<!-- END ABOUT SLIDER-->


<!-- START COUNTER SECTION -->
<section id="counter" class="counter-section overlay section-back-image" data-background="assets/img/bg/counter-bg.jpg">
    <div class="container">
        <div class="row wow fadeInDown">
            <div class="col-lg-3 col-md-6 col-sm-12 col-12 mb-lg-0 mb-md-4 mb-sm-4 mb-4">
                <div class="single-counter">
                    <div class="single-counter-icon">
                        <i class="icofont icofont-users-alt-2"></i>
                    </div>
                    <div class="single-counter-text">
                        <h5 class="timer">1250</h5>
                        <p>Happy Patients</p>
                    </div>
                </div>
            </div>
            <!-- end single counter -->
            <div class="col-lg-3 col-md-6 col-sm-12 col-12 mb-lg-0 mb-md-4 mb-sm-4 mb-4">
                <div class="single-counter">
                    <div class="single-counter-icon">
                        <i class="icofont icofont-nurse-alt"></i>
                    </div>
                    <div class="single-counter-text">
                        <h5 class="timer">1350</h5>
                        <p>Medical Workers</p>
                    </div>
                </div>
            </div>
            <!-- end single counter -->
            <div class="col-lg-3 col-md-6 col-sm-12 col-12 mb-lg-0 mb-md-4 mb-sm-4 mb-4">
                <div class="single-counter">
                    <div class="single-counter-icon">
                        <i class="icofont icofont-doctor-alt"></i>
                    </div>
                    <div class="single-counter-text">
                        <h5 class="timer">1560</h5>
                        <p>Total Doctors</p>
                    </div>
                </div>
            </div>
            <!-- end single counter -->
            <div class="col-lg-3 col-md-6 col-sm-12 col-12 mb-lg-0 mb-md-4 mb-sm-4 mb-4">
                <div class="single-counter">
                    <div class="single-counter-icon">
                        <i class="icofont icofont-hat-alt"></i>
                    </div>
                    <div class="single-counter-text">
                        <h5 class="timer">1670</h5>
                        <p>Medical Experience</p>
                    </div>
                </div>
            </div>
            <!-- end single counter -->
        </div>
    </div>
    <!--- END CONTAINER -->
</section>
<!-- END COUNTER SECTION -->


<!-- START VIDEO & FAQ -->
<section id="videofaq" class="section-padding">
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
                        <img class="img-fluid" src="assets/img/bg/video.jpg" alt="">
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
                    <img class="img-fluid" src="assets/img/team/5.jpg" alt="" />
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
                    <img class="img-fluid" src="assets/img/team/4.jpg" alt="" />
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
                    <img class="img-fluid" src="assets/img/team/3.jpg" alt="" />
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
                    <img class="img-fluid" src="assets/img/team/1.jpg" alt="" />
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
                    <img class="img-fluid" src="assets/img/team/2.jpg" alt="" />
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


<!-- START CALL TO ACTION 2 -->
<section id="calltoaction2" class="calltwo-padding overlay section-back-image" data-background="assets/img/bg/promo-bg.jpg">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-6 col-sm-12 col-12">
                <div class="calltoaction-wrap-2 mb-lg-0 mb-md-0 mb-sm-4 mb-4">
                    <h4>Lorem ipsum dolor sit amet, consectetur adipiscing elit,sed do<br>incididunt ut labore et dolore magna aliqua</h4>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 col-12 text-lg-right text-md-right text-sm-center text-center">
                <div class="calltoaction-wrap-2-btn">
                    <a class="wow fadeInDown promo-rmbtn-2" href="#">Read More</a>
                </div>
            </div>
        </div>
    </div>
    <!--- END CONTAINER -->
</section>
<!-- END CALL TO ACTION 2 -->


<!-- START TESTIMONIAL -->
<section id="testimonialfaq" class="section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 text-center mx-auto">
                <div class="section-title">
                    <h3>What Our<span> Patients Says</span></h3>
                    <span class="line"></span>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                </div>
            </div>
            <!-- end section title -->
        </div>
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                <div class="single-testimonial mb-4">
                    <div class="single-testimonial-img">
                        <img class="img-fluid" src="assets/img/team/tes1.jpg" alt="">
                    </div>
                    <div class="single-testimonial-text-warp">
                        <div class="single-testimonial-text-inner">
                            <p>Lorem ipsum dolor sit amet consectetured adipiscing elit, sed do eiusmod temporinci incididunt ut labore et dolore magna aliqua.</p>
                            <footer class="blockquote-footer">Jone Doee , <cite title="Source Title">Hash Theme</cite></footer>
                        </div>
                        <div class="single-testimonial-text-icon">
                            <i class="icofont icofont-quote-left"></i>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end single testimonial -->
            <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                <div class="single-testimonial">
                    <div class="single-testimonial-img">
                        <img class="img-fluid" src="assets/img/team/tes2.jpg" alt="">
                    </div>
                    <div class="single-testimonial-text-warp">
                        <div class="single-testimonial-text-inner">
                            <p>Lorem ipsum dolor sit amet consectetured adipiscing elit, sed do eiusmod temporinci incididunt ut labore et dolore magna aliqua.</p>
                            <footer class="blockquote-footer">Mark Doee , <cite title="Source Title">Hash Theme</cite></footer>
                        </div>
                        <div class="single-testimonial-text-icon">
                            <i class="icofont icofont-quote-left"></i>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end single testimonial -->
        </div>
    </div>
    <!--- END CONTAINER -->
</section>
<!-- END TESTIMONIAL -->


<!-- START CLIENT SECTION -->
<div id="client" class="client-section bg-gray">
    <div class="container">
        <div class="row">
            <div class="client-slider owl-carousel owl-theme">
                <div class="single-client">
                    <a href="#"><img class="img-fluid" src="assets/img/clients/1.png" alt=""></a>
                </div>
                <!-- end single client -->
                <div class="single-client">
                    <a href="#"><img class="img-fluid" src="assets/img/clients/2.png" alt=""></a>
                </div>
                <!-- end single client -->
                <div class="single-client">
                    <a href="#"><img class="img-fluid" src="assets/img/clients/3.png" alt=""></a>
                </div>
                <!-- end single client -->
                <div class="single-client">
                    <a href="#"><img class="img-fluid" src="assets/img/clients/4.png" alt=""></a>
                </div>
                <!-- end single client -->
                <div class="single-client">
                    <a href="#"><img class="img-fluid" src="assets/img/clients/1.png" alt=""></a>
                </div>
                <!-- end single client -->
                <div class="single-client">
                    <a href="#"><img class="img-fluid" src="assets/img/clients/2.png" alt=""></a>
                </div>
                <!-- end single client -->
            </div>
        </div>
    </div>
    <!--- END CONTAINER -->
</div>
<!-- END CLIENT SECTION -->


@endsection
