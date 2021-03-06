<?php

use App\Http\Controllers\SendMailController;
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
    $page = 'home';
    return view('index', ['page' => $page]);
});

Route::post('/send', [SendMailController::class, 'send']);

Route::get('/about', function () {
    $page = 'about';
    return view('about', ['page' => $page]);
});

Route::get('/service', function () {
    $page = 'service';
    return view('service', ['page' => $page]);
});

Route::get('/shop', function () {
    $page = 'shop';
    return view('shop', ['page' => $page]);
});

Route::get('/contact', function () {
    $page = 'contact';
    return view('contact', ['page' => $page]);
});

Route::get('/partner', function () {
    $page = 'partner';
    return view('partner', ['page' => $page]);
});
