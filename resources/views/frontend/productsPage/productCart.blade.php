@extends('frontend.layout.master')

@section('content')


    <!-- START CART SECTION -->
    <section id="cart" class="section-padding">
        <div class="auto-container">
            <div class="row">
                <div class="col-12">
                    <div class="table-responsive cart-table">
                        <table class="table table-bordered">
                            <tbody>
                            <tr>
                                <td class="img-row">
                                    <img src="assets/img/product/2.jpg" class="img-fluid" alt="">
                                </td>
                                <td class="titcat-roew">
                                    <span>Health,Medical</span>
                                    <h5>Tongue Pastrami Salami</h5>
                                </td>
                                <td class="titp-row">
                                    <span>Price</span>
                                    <p>$20.00</p>
                                </td>
                                <td class="tdqu-row">
                                    <div class="pro-quantity">
                                        <form action="#" method="post">
                                            <div class="quantity col-3 p-0">
                                                <input id="demo_vertical" type="text" value="01" name="demo_vertical">
                                            </div>
                                        </form>
                                    </div>
                                </td>
                                <td class="titp-row">
                                    <span>Total</span>
                                    <p>$20.00</p>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row"></th>
                                <td colspan="3" class="tdrt-row">
                                    <p class="rating">
                                        <i class="icofont icofont-ui-rating"></i>
                                        <i class="icofont icofont-ui-rating"></i>
                                        <i class="icofont icofont-ui-rating"></i>
                                        <i class="icofont icofont-ui-rate-blank"></i>
                                    </p>
                                </td>
                                <td class="tdrw-row">
                                    <a href="#"><i class="icofont icofont-heart-alt"></i></a>
                                    <a href="#"><i class="icofont icofont-delete"></i></a>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="table-responsive cart-table">
                        <table class="table table-bordered">
                            <tbody>
                            <tr>
                                <td class="img-row">
                                    <img src="assets/img/product/1.jpg" class="img-fluid" alt="">
                                </td>
                                <td class="titcat-roew">
                                    <span>Health,Medical</span>
                                    <h5>RES fsu67</h5>
                                </td>
                                <td class="titp-row">
                                    <span>Price</span>
                                    <p>$30.00</p>
                                </td>
                                <td class="tdqu-row">
                                    <div class="pro-quantity">
                                        <form action="#" method="post">
                                            <div class="quantity col-3 p-0">
                                                <input id="demo_vertical" type="text" value="01" name="demo_vertical">
                                            </div>
                                        </form>
                                    </div>
                                </td>
                                <td class="titp-row">
                                    <span>Total</span>
                                    <p>$30.00</p>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row"></th>
                                <td colspan="3" class="tdrt-row">
                                    <p class="rating">
                                        <i class="icofont icofont-ui-rating"></i>
                                        <i class="icofont icofont-ui-rating"></i>
                                        <i class="icofont icofont-ui-rating"></i>
                                        <i class="icofont icofont-ui-rating"></i>
                                    </p>
                                </td>
                                <td class="tdrw-row">
                                    <a href="#"><i class="icofont icofont-heart-alt"></i></a>
                                    <a href="#"><i class="icofont icofont-delete"></i></a>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="table-responsive cart-table">
                        <table class="table table-bordered">
                            <tbody>
                            <tr>
                                <td class="img-row">
                                    <img src="assets/img/product/6.jpg" class="img-fluid" alt="">
                                </td>
                                <td class="titcat-roew">
                                    <span>Health,Medical</span>
                                    <h5>Medicine Bag</h5>
                                </td>
                                <td class="titp-row">
                                    <span>Price</span>
                                    <p>$20.00</p>
                                </td>
                                <td class="tdqu-row">
                                    <div class="pro-quantity">
                                        <form action="#" method="post">
                                            <div class="quantity col-3 p-0">
                                                <input id="demo_vertical" type="text" value="01" name="demo_vertical">
                                            </div>
                                        </form>
                                    </div>
                                </td>
                                <td class="titp-row">
                                    <span>Total</span>
                                    <p>$20.00</p>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row"></th>
                                <td colspan="3" class="tdrt-row">
                                    <p class="rating">
                                        <i class="icofont icofont-ui-rating"></i>
                                        <i class="icofont icofont-ui-rating"></i>
                                        <i class="icofont icofont-ui-rating"></i>
                                        <i class="icofont icofont-ui-rate-blank"></i>
                                    </p>
                                </td>
                                <td class="tdrw-row">
                                    <a href="#"><i class="icofont icofont-heart-alt"></i></a>
                                    <a href="#"><i class="icofont icofont-delete"></i></a>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="cart-bottom">
                        <div class="row mt-5">
                            <div class="col-lg-3 col-md-3 col-12">
                                <form action="#">
                                    <div class="row">
                                        <div class="form-group col-lg-8 pl-3 p-0">
                                            <input name="aname" class="form-control" id="afirst-name" placeholder="Coupon Code" required="required" type="text">
                                        </div>
                                        <div class="form-group col-lg-4 p-0">
                                            <a class="btn btn-lg btn-app-form">Apply</a>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <!-- end col -->
                            <div class="col-lg-2 col-md-2 col-12 text-center">
                                <span>Sub Total</span>
                                <p>$70.00</p>
                            </div>
                            <!-- end col -->
                            <div class="col-lg-2 col-md-2 col-12 text-center">
                                <span>Shipping</span>
                                <p>Free Shipping</p>
                            </div>
                            <!-- end col -->
                            <div class="col-lg-2 col-md-2 col-12 text-center">
                                <span>Total</span>
                                <p>$70.00</p>
                            </div>
                            <!-- end col -->
                            <div class="col-lg-3 col-md-3 col-12">
                                <a class="btn btn-lg btn-app-form">Process to checkout <i class="icofont icofont-caret-right"></i></a>
                            </div>
                            <!-- end col -->
                        </div>
                    </div>
                    <!-- end row -->
                </div>
            </div>
        </div>
        <!--- END CONTAINER -->
    </section>
    <!-- END CART SECTION -->


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
