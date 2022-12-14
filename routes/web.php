<?php

use App\Models\Services;
use App\Models\ItServices;
use App\Models\Products;
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
    return view('home', [
        'services' => Services::all()
    ]);
});

Route::get('/it-services', function () {
    return view('it-services', [
        'it_services' => ItServices::all()
    ]);
});

Route::get('/products', function () {
    return view('products', [
        'products' => Products::all()
    ]);
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/audit', function () {
    return view('audit');
});