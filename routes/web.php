<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::prefix('/')->group(function () {
    // Home
    Route::get('/', function () {
        return view('client.index');
    });

    // About-us
    Route::get('/about-us', function () {
        return view('client.about-us');
    });

    // Shop & Shop-list
    Route::get('/shop', function () {
        return view('client.shop');
    });

    Route::get('/shop-list', function () {
        return view('client.shop-list');
    });

    // Product details
    Route::get('/product-details', function () {
        return view('client.product-details');
    });

    // Wishlist
    Route::get('/wishlist', function () {
        return view('client.wishlist');
    });

    // My account
    Route::get('/my-account', function () {
        return view('client.my-account');
    });

    // Login / Register
    Route::get('/login-register', function () {
        return view('client.login-register');
    });

    // Blog slidebar
    Route::get('/blog-left-slidebar', function () {
        return view('client.blog-left-slidebar');
    });

    Route::get('/blog-right-slidebar', function () {
        return view('client.blog-right-slidebar');
    });

    Route::get('/blog-no-slidebar', function () {
        return view('client.blog-no-slidebar');
    });


    // Blog masonary
    Route::get('/blog-masonary', function () {
        return view('client.blog-masonary');
    });

    // Blog details
    Route::get('/blog-details-standerd', function () {
        return view('client.blog-details-standerd');
    });

    Route::get('/blog-details-audio', function () {
        return view('client.blog-details-audio');
    });

    Route::get('/blog-details-video', function () {
        return view('client.blog-details-video');
    });

    Route::get('/blog-details-gallery', function () {
        return view('client.blog-details-gallery');
    });

    Route::get('/blog-details-link', function () {
        return view('client.blog-details-link');
    });

    Route::get('/blog-details-quote', function () {
        return view('client.blog-details-quote');
    });

    Route::get('/blog-details', function () {
        return view('client.blog-details');
    });

    // Contact
    Route::get('/contact', function () {
        return view('client.contact');
    });

    // Cart page & checkout page
    Route::get('/cart-page', function () {
        return view('client.cart-page');
    });

    Route::get('/checkout', function () {
        return view('client.checkout');
    });
});
Route::get('dashboard', function () {
    return view('admin.dashboard.index');
});
