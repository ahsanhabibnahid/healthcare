@extends('frontend.layout.master')

@section('content')

    <!-- START SINGLE PRODUCT SECTION -->
    <section id="sinproduct" class="section-padding">
        <div class="auto-container">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-12">
                    <div class="single-product-badge">-50%</div>
                    <div class="sin-pro-image">
                        <img id="zoom_01" class="img-fluid" src="assets/img/product/10.jpg" data-zoom-image="assets/img/product/11.jpg" alt="img"/>
                    </div>
                </div>
                <!-- end col -->
                <div class="col-lg-6 col-md-12 col-12 pl-lg-5 pl-md-2 pl-sm-2 pl-2 mt-lg-0 mt-md-5 mt-sm-5 mt-5">
                    <div class="single-pro-details">
                        <span class="pro-de-cata">Health,Medical</span>
                        <p class="rating">
                            <i class="icofont icofont-ui-rating"></i>
                            <i class="icofont icofont-ui-rating"></i>
                            <i class="icofont icofont-ui-rating"></i>
                            <i class="icofont icofont-ui-rate-blank"></i>
                        </p>
                        <h3 class="pro-de-title">Tongue Pastrami Salami</h3>
                        <p class="price">$50.00 - $90.00</p>
                        <p class="single-pro-con">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        <div class="pro-de-list-drop">
                            <label>Color:</label>
                            <div class="form-group col-lg-6 col-md-6 col-8 p-0">
                                <select class="form-control" id="serviceselect">
                                    <option>Choose an option</option>
                                    <option>Red</option>
                                    <option>Blue</option>
                                    <option>Green</option>
                                </select>
                            </div>
                        </div>
                        <div class="single-pro-details-info">
                            <div class="single-pro-details-info-left mb-lg-0 mb-md-0 mb-3">
                                <a class="add-to-cart">Add to cart <i class="icofont icofont-caret-right"></i></a>
                            </div>
                            <div class="single-pro-details-info-right">
                                <div class="pro-quantity">
                                    <form action="#" method="post">
                                        <div class="quantity col-2 p-0">
                                            <input id="demo_vertical" type="text" value="01" name="demo_vertical">
                                        </div>
                                    </form>
                                </div>
                                <div class="pro-quantity-icon">
                                    <i class="icofont icofont-heart-alt"></i>
                                </div>
                            </div>
                        </div>
                        <div class="single-pro-details-attr table-responsive mt-4">
                            <table class="table">
                                <tbody>
                                <tr>
                                    <th>SKU:</th>
                                    <td>H567</td>
                                    <th>Manufacturer:</th>
                                    <td>USA</td>
                                </tr>
                                <tr>
                                    <th>Color:</th>
                                    <td>Blue,Green,Red,Gray</td>
                                    <th>BRAND:</th>
                                    <td>Sensiv</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- end col -->
            </div>
            <div class="pro-info-tab mt-5">
                <div class="row">
                    <div class="col-lg-12">
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="nav-item"><a class="nav-link active" href="#" data-target="#one" data-toggle="tab"><i class="icofont icofont-gear"></i> Description</a></li>
                            <li class="nav-item"><a class="nav-link" href="#" data-target="#two" data-toggle="tab"><i class="icofont icofont-loop"></i> Additional Information</a></li>
                            <li class="nav-item"><a class="nav-link" href="#" data-target="#three" data-toggle="tab"><i class="icofont icofont-ui-rate-blank"></i> Reviews(0)</a></li>
                            <li class="nav-item"><a class="nav-link" href="#" data-target="#four" data-toggle="tab"><i class="icofont icofont-ui-rate-remove"></i> Add a review</a></li>
                        </ul>
                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div class="tab-pane animated fadeInDown active show" id="one">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                            </div>
                            <div class="tab-pane animated fadeInDown" id="two">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                            </div>
                            <div class="tab-pane animated fadeInDown" id="three">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                            </div>
                            <div class="tab-pane animated fadeInDown" id="four">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--- END ROW -->
            <div class="row mt-5">
                <div class="col-lg-7 text-center mx-auto">
                    <div class="section-title">
                        <h3>You May <span>also like</span></h3>
                        <span class="line"></span>
                    </div>
                </div>
                <!-- end section title -->
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-4 col-12">
                    <div class="single-product">
                        <div class="single-product-badge">-50%</div>
                        <div class="single-product-img">
                            <a href="#"><img src="assets/img/product/2.jpg" class="img-fluid" alt=""></a>
                        </div>
                        <div class="single-product-info">
                            <a href="#"><i class="icofont icofont-cart-alt"></i></a>
                            <a href="#"><i class="icofont icofont-heart-alt"></i></a>
                            <a href="#"><i class="icofont icofont-minus"></i></a>
                            <a href="#"><i class="icofont icofont-expand"></i></a>
                        </div>
                        <div class="single-product-info-details">
                            <div class="single-product-info-left">
                                <p>Shoulder</p>
                            </div>
                            <div class="single-product-info-right">
                                <p class="price">$50.00-$90.00</p>
                            </div>
                            <h5>Calcium Powder</h5>
                            <div class="single-product-info-rating">
                                <p class="rating">
                                    <i class="icofont icofont-ui-rating"></i>
                                    <i class="icofont icofont-ui-rating"></i>
                                    <i class="icofont icofont-ui-rating"></i>
                                    <i class="icofont icofont-ui-rate-blank"></i>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end single product -->
                <div class="col-lg-3 col-md-4 col-12">
                    <div class="single-product">
                        <div class="single-product-img">
                            <a href="#"><img src="assets/img/product/1.jpg" class="img-fluid" alt=""></a>
                        </div>
                        <div class="single-product-info">
                            <a href="#"><i class="icofont icofont-cart-alt"></i></a>
                            <a href="#"><i class="icofont icofont-heart-alt"></i></a>
                            <a href="#"><i class="icofont icofont-minus"></i></a>
                            <a href="#"><i class="icofont icofont-expand"></i></a>
                        </div>
                        <div class="single-product-info-details">
                            <div class="single-product-info-left">
                                <p>Machine</p>
                            </div>
                            <div class="single-product-info-right">
                                <p class="price">$30.00-$60.00</p>
                            </div>
                            <h5>RES fsu67</h5>
                            <div class="single-product-info-rating">
                                <p class="rating">
                                    <i class="icofont icofont-ui-rating"></i>
                                    <i class="icofont icofont-ui-rating"></i>
                                    <i class="icofont icofont-ui-rating"></i>
                                    <i class="icofont icofont-ui-rating"></i>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end single product -->
                <div class="col-lg-3 col-md-4 col-12">
                    <div class="single-product">
                        <div class="single-product-img">
                            <a href="#"><img src="assets/img/product/8.jpg" class="img-fluid" alt=""></a>
                        </div>
                        <div class="single-product-info">
                            <a href="#"><i class="icofont icofont-cart-alt"></i></a>
                            <a href="#"><i class="icofont icofont-heart-alt"></i></a>
                            <a href="#"><i class="icofont icofont-minus"></i></a>
                            <a href="#"><i class="icofont icofont-expand"></i></a>
                        </div>
                        <div class="single-product-info-details">
                            <div class="single-product-info-left">
                                <p>Machine</p>
                            </div>
                            <div class="single-product-info-right">
                                <p class="price">$15.00-$4.00</p>
                            </div>
                            <h5>Blood Pressure</h5>
                            <div class="single-product-info-rating">
                                <p class="rating">
                                    <i class="icofont icofont-ui-rating"></i>
                                    <i class="icofont icofont-ui-rating"></i>
                                    <i class="icofont icofont-ui-rating"></i>
                                    <i class="icofont icofont-ui-rating"></i>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end single product -->
                <div class="col-lg-3 col-md-4 col-12">
                    <div class="single-product">
                        <div class="single-product-img">
                            <a href="#"><img src="assets/img/product/9.jpg" class="img-fluid" alt=""></a>
                        </div>
                        <div class="single-product-info">
                            <a href="#"><i class="icofont icofont-cart-alt"></i></a>
                            <a href="#"><i class="icofont icofont-heart-alt"></i></a>
                            <a href="#"><i class="icofont icofont-minus"></i></a>
                            <a href="#"><i class="icofont icofont-expand"></i></a>
                        </div>
                        <div class="single-product-info-details">
                            <div class="single-product-info-left">
                                <p>Equipment</p>
                            </div>
                            <div class="single-product-info-right">
                                <p class="price">$5.00-$6.00</p>
                            </div>
                            <h5>Face Mask</h5>
                            <div class="single-product-info-rating">
                                <p class="rating">
                                    <i class="icofont icofont-ui-rating"></i>
                                    <i class="icofont icofont-ui-rating"></i>
                                    <i class="icofont icofont-ui-rating"></i>
                                    <i class="icofont icofont-ui-rating"></i>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end single product -->
            </div>
        </div>
        <!--- END CONTAINER -->
    </section>
    <!-- END SINGLE SECTION -->




@endsection
