<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Route::get('/mypage', function () {
    return view('mypage');
});

Route::get('/mypage1', function () {
    return view('mypage1');
});

Route::get('/blade', function () {
    return view('blade_temp');
});