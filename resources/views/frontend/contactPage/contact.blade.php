@extends('frontend.layout.master')

@section('content')

    <!-- GOOGLE MAP -->
    <div class="gmap_canvas">
        <iframe id="gmap_canvas" src="https://maps.google.com/maps?q=10004%2C%20Battery%20Park%2C%20New%20York%2C%20USA%20&amp;t=&amp;z=13&amp;ie=UTF8&amp;iwloc=&amp;output=embed"></iframe>
    </div>
    <!-- END GOOGLE MAP -->

    <!-- START CONTACT SECTION -->
    <section id="contact" class="section-padding">
        <div class="auto-container">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-12 col-12">
                    <div class="contact-title">
                        <h4>You Have Any question? Simply Send Us Message</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.</p>
                        <hr>
                    </div>
                    <div class="contact-form mt-4">
                        <form id="contact-form" class="form" name="enq" method="POST" action="http://trek.hashtheme.com/ce/cleveland-preview3/cleveland/form-process.php">
                            <div class="row">
                                <div class="form-group col-lg-6">
                                    <label>Name</label>
                                    <span class="form-icon"><i class="icofont icofont-user-alt-5"></i></span>
                                    <input name="name" class="form-control form-controlb" id="cname" required="required" type="text">
                                </div>
                                <div class="form-group col-lg-6">
                                    <label>Email</label>
                                    <span class="form-icon"><i class="icofont icofont-envelope"></i></span>
                                    <input name="email" class="form-control form-controlb" id="cmail" required="required" type="email">
                                </div>
                                <div class="form-group col-lg-6">
                                    <label>Number</label>
                                    <span class="form-icon"><i class="icofont icofont-telephone"></i></span>
                                    <input name="phone" class="form-control form-controlb" id="cnumber" required="required" type="text">
                                </div>
                                <div class="form-group col-lg-6">
                                    <label>Subject</label>
                                    <span class="form-icon"><i class="icofont icofont-ui-email"></i></span>
                                    <input name="subject" class="form-control form-controlb" id="csubject" required="required" type="text">
                                </div>
                                <div class="form-group col-lg-12">
                                    <label>Message</label>
                                    <textarea rows="6" name="message" class="form-control" id="cmessage" placeholder="Your Message Here..." required="required"></textarea>
                                </div>
                                <div class="form-group col-lg-12 mb0">
                                    <div class="actions">
                                        <input value="Submit Message" name="submit" id="submitButton" class="btn btn-lg btn-contact-bg" title="Click here to submit your message!" type="submit">
                                        <img src="assets/img/ajax-loader.gif" id="loader" style="display:none" alt="loading" width="16" height="16">
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-12 pl-lg-5 pl-md-5 pl-sm-2 pl-2 mt-lg-0 mt-md-0 mt-sm-3 mt-3">
                    <div class="contact-title">
                        <h4>Get In Touch</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, na aliqua.</p>
                        <hr>
                    </div>
                    <div class="address-box mt-4">
                        <div class="single-address-box mb-3">
                            <span>Address:</span>
                            <p>10004, Battery Park, <br> New York, USA </p>
                        </div>
                        <div class="single-address-box mb-3">
                            <span>Phone & Fax:</span>
                            <p>+88-675-128763 </p>
                            <p>+88-675-128763 </p>
                        </div>
                        <div class="single-address-box">
                            <span>Inquires:</span>
                            <p>info@your_site.com</p>
                            <p>info@your_site.com</p>
                        </div>
                    </div>
                    <div class="free-quote-box mt-4">
                        <h6>Ask question</h6>
                        <h3>Support is ready</h3>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy. </p>
                        <a href="#">Free quote <i class="icofont icofont-simple-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <!--- END CONTAINER -->
    </section>
    <!-- END CONTACT SECTION -->

    <!-- SINGLE DOCTOR PROMO -->
    <div class="single-doc-promo bg-theme mt-lg-5 mt-md-3 mt-sm-3 mt-3">
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
                                <a href="#" class="single-doc-promo-btn fadeInUp animated">Call Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END SINGLE DOCTOR PROMO -->


@endsection
