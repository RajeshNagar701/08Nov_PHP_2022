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
    return view('frontend.index');
});
Route::get('/index', function () {
    return view('frontend.index');
});

Route::get('/about', function () {
    return view('frontend.about');
});

Route::get('/service', function () {
    return view('frontend.service');
});

Route::get('/product', function () {
    return view('frontend.product');
});

Route::get('/blog', function () {
    return view('frontend.blog');
});

Route::get('/detail', function () {
    return view('frontend.detail');
});

Route::get('/feature', function () {
    return view('frontend.feature');
});

Route::get('/team', function () {
    return view('frontend.team');
});

Route::get('/testimonial', function () {
    return view('frontend.testimonial');
});


Route::get('/contact', function () {
    return view('frontend.contact');
});