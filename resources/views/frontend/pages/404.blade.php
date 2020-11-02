@extends('frontend.layout.master')

@section('content')


    <!-- START ERROR SECTION -->
    <section id="error" class="section-padding">
        <div class="auto-container">
            <div class="error-page-top">
                <div class="row">
                    <div class="col-lg-8 mx-auto text-center">
                        <h2>Oops!</h2>
                        <span>404</span>
                        <p>Sorry, but nothing matched your search terms. Please try again with some different keywords.</p>
                        <div class="error-search-box wow fadeInDown">
                            <form>
                                <div class="row">
                                    <div class="form-group col-lg-10 col-md-10 col-12 p-0">
                                        <input class="form-control" name="searcher" placeholder="Search again here..." type="text">
                                    </div>
                                    <div class="form-group col-lg-2 col-md-2 col-12 p-0">
                                        <button type="submit" class="btn err-se-btn">SEARCH</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--- END CONTAINER -->
    </section>
    <!-- END ERROR SECTION -->


    <!-- START ERROR SECTION TWO -->
    <section id="error2" class="section-padding bg-gray">
        <div class="auto-container">
            <div class="row">
                <div class="col-lg-7 text-center mx-auto">
                    <div class="section-title">
                        <h3>Most Useful Links</h3>
                        <span class="line"></span>
                        <p>It looks like nothing was found at this location. Maybe try one of the links below or a search?</p>
                    </div>
                </div>
                <!-- end section title -->
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-12 mb-lg-0 mb-md-4 mb-4">
                    <div class="sidebar-widget">
                        <h5 class="widget-title">Recent Post</h5>
                        <!-- end widget tittle-->
                        <div class="servide-list">
                            <ul>
                                <li><a href="#"><i class="icofont icofont-rounded-right"></i> Digital Bariatric Surgery</a> </li>
                                <li><a href="#"><i class="icofont icofont-rounded-right"></i> Obesity: A Growing Epidemic</a> </li>
                                <li><a href="#"><i class="icofont icofont-rounded-right"></i> After Surgery Bed Rest</a> </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- end col -->
                <div class="col-lg-4 col-md-6 col-12 mb-lg-0 mb-md-4 mb-4">
                    <div class="sidebar-widget">
                        <h5 class="widget-title">Most Used Categories</h5>
                        <!-- end widget tittle-->
                        <div class="servide-list">
                            <ul>
                                <li><a href="#"><i class="icofont icofont-rounded-right"></i> Cancer Care (3)</a> </li>
                                <li><a href="#"><i class="icofont icofont-rounded-right"></i> Health checks (8)</a> </li>
                                <li><a href="#"><i class="icofont icofont-rounded-right"></i> Accident & Emergency (5)</a> </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- end col -->
                <div class="col-lg-4 col-md-12 col-12">
                    <div class="sidebar-widget">
                        <h5 class="widget-title">Useful Pages</h5>
                        <!-- end widget tittle-->
                        <div class="servide-list">
                            <ul>
                                <li><a href="#"><i class="icofont icofont-rounded-right"></i> Home Page</a> </li>
                                <li><a href="#"><i class="icofont icofont-rounded-right"></i> About Cleveland</a> </li>
                                <li><a href="#"><i class="icofont icofont-rounded-right"></i> Get Appointment</a> </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- end col -->
            </div>
        </div>
        <!--- END CONTAINER -->
    </section>
    <!-- END ERROR SECTION TWO -->


    <!-- START CLIENT SECTION -->
    <div id="client" class="client-section bg-gray-2">
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
