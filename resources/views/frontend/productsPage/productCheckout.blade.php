@extends('frontend.layout.master')

@section('content')


    <!-- START CHECKOUT SECTION -->
    <section id="checkOut" class="checkout-page section-padding">
        <div class="auto-container">
            <div class="row text-center ">
                <div class="col-lg-6 col-md-6 col-12 text-center">
                    <div class="checkOut-po-lc">
                        <p>Returning Customers? <a href="#">Click Here To Login <i class="icofont icofont-caret-down"></i></a><p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12 pl-lg-5 pl-md-5 pl-sm-2 pl-2 mt-lg-0 mt-md-0 mt-sm-0 mt-5">
                    <div class="checkOut-po-lc">
                        <p>Have a coupon? <a href="#">Click here to enter your code <i class="icofont icofont-caret-down"></i></a><p>
                    </div>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="checkout-pt-belling">
                        <h3>Billing Details</h3>
                        <hr>
                        <div class="billing-form-ma">
                            <form>
                                <div class="row">
                                    <div class="form-group col-lg-6">
                                        <label>First Name:</label>
                                        <input class="form-control" id="bfn" type="text">
                                    </div>
                                    <div class="form-group col-lg-6">
                                        <label>Lane Name:</label>
                                        <input class="form-control" id="bln" type="text">
                                    </div>
                                    <div class="form-group col-lg-12">
                                        <label>Company Name:</label>
                                        <input class="form-control" id="bcn" type="text">
                                    </div>
                                    <div class="form-group col-lg-12">
                                        <label>Country:</label>
                                        <select class="form-control">
                                            <option>Country Name</option>
                                            <option>Country Name 1</option>
                                            <option>Country Name 2</option>
                                            <option>Country Name 3</option>
                                            <option>Country Name 4</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-lg-12">
                                        <label>Address Line 1:</label>
                                        <input class="form-control" id="balno" type="text">
                                    </div>
                                    <div class="form-group col-lg-12">
                                        <label>Address Line 2:</label>
                                        <input class="form-control" id="balnt" type="text">
                                    </div>
                                    <div class="form-group col-lg-6">
                                        <label>Postcode/Zip:</label>
                                        <input class="form-control" id="bpczi" type="text">
                                    </div>
                                    <div class="form-group col-lg-6">
                                        <label>Phone:</label>
                                        <input class="form-control" id="bpn" type="text">
                                    </div>
                                    <div class="form-group col-lg-12">
                                        <label>Email Address:</label>
                                        <input class="form-control" id="bde" type="email">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12 pl-lg-5 pl-md-5 pl-sm-2 pl-2 mt-lg-0 mt-md-0 mt-sm-0 mt-5">
                    <div class="checkout-pt-shiff">
                        <h3>Ship to a different address?</h3>
                        <hr>
                        <div class="billing-form-ma">
                            <form>
                                <div class="row">
                                    <div class="form-group col-lg-12">
                                        <label>Order Notes:</label>
                                        <textarea rows="4" placeholder="Notes about your order, e.g. special notes for delivery" class="form-control" id="boni"></textarea>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-lg-8 col-md-8 col-12">
                    <h3>Your Order</h3>
                    <hr>
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <tbody>
                            <tr>
                                <th>Product</th>
                                <th>Total</th>
                            </tr>
                            <tr>
                                <td>Calcium Powder <strong>* 1</strong></td>
                                <td>$40.00</td>
                            </tr>
                            <tr>
                                <td>Diabetes Machine <strong>* 2</strong></td>
                                <td>$70.00</td>
                            </tr>
                            <tr>
                                <th>Sub Total</th>
                                <th>$110.00</th>
                            </tr>
                            <tr>
                                <th>Shipping</th>
                                <th>Free Shipping</th>
                            </tr>
                            <tr>
                                <th>Total</th>
                                <th>$110.00</th>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-12">
                    <form>
                        <div class="payment-method">
                            <div class="col-12 form-group">
                                <input checked="" name="payment-method" id="direct-bank" type="radio">
                                <label for="direct-bank">Direct Bank Transfer </label>
                            </div>
                            <div class="col-12 form-group">
                                <input name="payment-method" id="check-pay" type="radio">
                                <label for="check-pay"> Check Payments </label>
                            </div>
                            <div class="col-12 form-group">
                                <input name="payment-method" id="cash-on-delivery" type="radio">
                                <label for="cash-on-delivery"> Cash on Delivery </label>
                            </div>
                            <div class="col-12 form-group">
                                <input name="payment-method" id="paypal" type="radio">
                                <label for="paypal">Paypal</label>
                            </div>
                            <hr>
                            <div class="col-12 form-group">
                                <a class="plac-or-btn" href="#">Place Order</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!--- END CONTAINER -->
    </section>
    <!-- END CHECKOUT SECTION -->


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
