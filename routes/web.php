<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('frontend.homePage.home');
});


Route::get('/service', function () {
    return view('frontend.servicePage.service');
});

Route::get('/singleService', function () {
    return view('frontend.servicePage.singleService');
});

Route::get('/gallery', function () {
    return view('frontend.galleryPage.gallery');
});

Route::get('/about', function () {
    return view('frontend.pages.about');
});

Route::get('/doctors', function () {
    return view('frontend.pages.doctors');
});

Route::get('/singleDoctor', function () {
    return view('frontend.pages.singleDoctor');
});

Route::get('/appointment', function () {
    return view('frontend.pages.appointment');
});

Route::get('/testimonial', function () {
    return view('frontend.pages.testimonial');
});

Route::get('/newPatient', function () {
    return view('frontend.pages.newPatient');
});

Route::get('/faq', function () {
    return view('frontend.pages.faq');
});

Route::get('/reports', function () {
    return view('frontend.pages.reports');
});

Route::get('/404', function () {
    return view('frontend.pages.404');
});

Route::get('/products', function () {
    return view('frontend.productsPage.products');
});

Route::get('/singleProduct', function () {
    return view('frontend.productsPage.singleProduct');
});

Route::get('/productCheckout', function () {
    return view('frontend.productsPage.productCheckout');
});

Route::get('/productCart', function () {
    return view('frontend.productsPage.productCart');
});

Route::get('/blog', function () {
    return view('frontend.blogPage.blog');
});

Route::get('/blogSingle', function () {
    return view('frontend.blogPage.blogSingle');
});

Route::get('/contact', function () {
    return view('frontend.contactPage.contact');
});
