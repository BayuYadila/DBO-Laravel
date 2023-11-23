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

Route::get('/manage-deposits', function () {
    return view('dashboard/manage-deposits');
});

Route::get('/edit-item-submission-center', function () {
    return view('dashboard/edit-item-submission-center');
});

Route::get('/edit-item-keywords', function () {
    return view('dashboard/edit-item-keywords');
});

Route::get('/edit-item-deposits', function () {
    return view('dashboard/edit-item-deposits');
});

Route::get('/profile', function () {
    return view('dashboard/profile');
});

Route::get('/profile-edit-user', function () {
    return view('dashboard/profile-edit-user');
});

Route::get('/review', function () {
    return view('dashboard/review');
});

Route::get('/detail', function () {
    return view('dashboard/detail');
});

Route::get('/dashboard-admin', function () {
    return view('dashboard/dashboard-admin');
});

Route::get('/admin-status', function () {
    return view('dashboard/admin-status');
});

Route::get('/admin-create-user', function () {
    return view('dashboard/admin-create-user');
});

Route::get('/admin-edit-keywords', function () {
    return view('dashboard/admin-edit-keywords');
});
