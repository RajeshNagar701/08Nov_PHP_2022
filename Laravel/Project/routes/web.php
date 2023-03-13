<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\contactController;
use App\Http\Controllers\customerController;
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


Route::get('/signup',[customerController::class,'index']);
Route::post('/signup',[customerController::class,'store']);

Route::get('/login',[customerController::class,'login']);
Route::post('/logincheck',[customerController::class,'logincheck']);  

Route::get('/contact',[contactController::class,'index']); // call --resource controller
Route::post('/contact',[contactController::class,'store']);

//=================================================
// admin panel Routes


Route::get('/admin', function () {
    return view('backend.index');
});
Route::get('/dashboard', function () {
    return view('backend.dashboard');
});
Route::get('/add_emp', function () {
    return view('backend.add_emp');
});
Route::get('/manage_emp', function () {
    return view('backend.manage_emp');
});
Route::get('/add_cat', function () {
    return view('backend.add_cat');
});
Route::get('/manage_cat', function () {
    return view('backend.manage_cat');
});
Route::get('/add_loc', function () {
    return view('backend.add_loc');
});
Route::get('/manage_loc', function () {
    return view('backend.manage_loc');
});


Route::get('/manage_user',[customerController::class,'alldata']);
Route::get('/manage_user/{id}',[customerController::class,'destroy']);

Route::get('/manage_contact',[contactController::class,'alldata']);
Route::get('/manage_contact/{id}',[contactController::class,'destroy']);