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

Route::get('/', function () {
    return view('landing_page/home');
});

Route::get('/search-books', function () {
    return view('landing_page/search-books');
});

Route::get('/about-us', function () {
    return view('landing_page/about-us');
});

Route::get('/related-links', function () {
    return view('landing_page/related-links');
});

Route::get('/statistics', function () {
    return view('landing_page/statistics');
});

Route::get('/contact-us', function () {
    return view('landing_page/contact-us');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/signup', function () {
    return view('signup');
});

