<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;

use App\HTTP\Controllers\DataBayarController;
use App\Http\Controllers\DatacustomerController;
use App\Http\Controllers\DatapengirimController;
use App\Http\Controllers\LoginController;

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

Route::group(['middleware' => ['auth', 'ceklevel:admin']], function () {
    // Route::get('/admhome', function () {
    //     return view('admhome');
    Route::get('/admhome', [AdminController::class, 'index', 'login' => true]);
    Route::post('/admhome', [AdminController::class, 'logout']);
});

Route::group(['middleware' => ['auth', 'ceklevel:customer']], function () {
    Route::get('/customer', function () {
        return view('customer');
    });
});

Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/', function () {
    return view('home');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::post(
    '/login',
    [LoginController::class, 'authenticate', 'login' => true]
);

Route::get('/signup', function () {
    return view('signup');
});

Route::get('/admwarga', function () {
    return view('admwarga');
});

Route::get('/admpengirim', function () {
    return view('admpengirim');
});

Route::get('/admcharts', function () {
    return view('admcharts');
});

Route::get('/signupadm', function () {
    return view('signupadm');
});

Route::get('/datadawar', [DatacustomerController::class, 'datadawar']);

Route::get('/datadarim', [DatapengirimController::class, 'index']);

Route::get('/datacharts', function () {
    return view('datacharts');
});

Route::get('/custlocation', function () {
    return view('custlocation');
});

Route::resource('/databayar', DataBayarController::class);
