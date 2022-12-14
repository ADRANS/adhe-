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

route::get('/ADHE', function() {
    return view('ADHE');
});

route::get('/portopolio', function() {
    return view('portopolio');
});

route::get('/about', function() {
    return view('about');
});

route::get('/contact', function() {
    return view('contact');
});

route::get('/vidio', function() {
    return view('vidio');
});