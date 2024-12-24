<?php

use App\Http\Controllers\dashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\loginController;
use App\Http\Controllers\tambah_produkController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/', function () {
//     return view('dashboard');
// });

Route::get('login', [loginController::class, 'index']);

Route::post('login', [loginController::class, 'store']);

Route::get('dashboard', [dashboardController::class, 'admin'])-> name('dashboard');

Route::post('logout', [loginController::class, 'logout'])-> name('logout');

Route::get('tambah_produk', [tambah_produkController::class, 'produk']);

