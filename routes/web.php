<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Carbon;

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
    $page = 'home';
    return view('index', ['page' => $page]);
});

Route::get('/about', function () {
    $page = 'about';
    return view('about', ['page' => $page]);
});

Route::get('/service', function () {
    $page = 'service';
    return view('service', ['page' => $page]);
});
