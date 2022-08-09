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
    $title = 'Penyedia Alat Kesehatan yang Berkualitas dan Terpercaya - Maurindo';
    $description = 'One big Family of Maurindo Group, we provide and deliver the best services and HEALTH CARE Products to you!';
    return view('index', ['page' => $page, 'title' => $title, 'description' => $description]);
});

Route::post('/send', [SendMailController::class, 'send']);

Route::get('/about', function () {
    $page = 'about';
    $title = 'Tentang Perusahaan - Maurindo Teknik Solusi';
    $description = 'Tentang Perusahaan Maurindo Teknik Solusi';
    return view('about', ['page' => $page, 'title' => $title, 'title' => $title, 'description' => $description]);
});

Route::get('/service', function () {
    $page = 'service';
    $title = 'Layanan Penyedia Alat Kesehatan dan lainnya - Maurindo ';
    $description = 'Berbagai Layanan yang Maurindo Sediakan';
    return view('service', ['page' => $page, 'title' => $title, 'description' => $description]);
});

Route::get('/shop', function () {
    $page = 'shop';
    $title = 'Toko Alat Kesehatan Kami di Marketplace - Maurindo';
    $description = 'Toko Maurindo Teknik Solusi di berbagai marketplace';
    return view('shop', ['page' => $page, 'title' => $title, 'description' => $description]);
});

Route::get('/contact', function () {
    $page = 'contact';
    $title = 'Hubungi Kami - Maurindo Teknik Solusi';
    $description = 'Kontak dan Lokasi Kantor Pusat dari PT.Maurindo Teknik Solusi';
    return view('contact', ['page' => $page, 'title' => $title, 'description' => $description]);
});

Route::get('/partner', function () {
    $page = 'partner';
    $title = 'Partner Produk Kami - Maurindo Teknik Solusi';
    $description = 'Berbagai Partner Produk dari Produk yang Kami Jual';
    return view('partner', ['page' => $page, 'title' => $title, 'description' => $description]);
});
