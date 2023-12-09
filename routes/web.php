<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ForgotController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RegisterController;

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

// Nim   : 10121177
// Nama  : Muhamad Gilang Abdul Gani
// Kelas : IF-5

// ROUTE LOGIN
Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::post('actionlogin', [LoginController::class, 'actionlogin'])->name('actionlogin');

// ROUTE REGISTER
Route::get('register', [RegisterController::class, 'register'])->name('register');
Route::post('register/action', [RegisterController::class, 'actionregister'])->name('actionregister');

// ROUTE FORGOT
Route::get('forgot', [ForgotController::class, 'forgot'])->name('forgot');
Route::post('forgot/action', [ForgotController::class, 'actionforgot'])->name('actionforgot');

// ROUTE LOGOUT
Route::get('actionlogout', [LoginController::class, 'actionlogout'])->name('actionlogout')->middleware('auth');

// ROUTE LANDING PAGE
Route::get('/', function () {
    return view('layouts.landingpage');
})->name('home');
Route::get('toko', [HomeController::class, 'toko'])->name('toko');
Route::get('shopingcart', [HomeController::class, 'shopingcart'])->name('shopingcart');
Route::get('checkout', [HomeController::class, 'checkout'])->name('checkout');
Route::get('blog', [HomeController::class, 'blog'])->name('blog');
Route::get('kontak', [HomeController::class, 'kontak'])->name('kontak');

// ROUTE DASHBOARD
Route::get('dashboard', function () {
    return view('layouts.dashboard');
})->name('dashboard');

// ROUTE PROFILE
Route::get('profile', [ProfileController::class, 'profile'])->name('profile');

// ROUTE CRUD PRODUK
Route::controller(ProdukController::class)->prefix('produk')->group(function () {
    Route::get('', 'index')->name('produk');
    Route::get('create', 'create')->name('produk.create');
    Route::post('store', 'store')->name('produk.store');
    Route::get('show/{id}', 'show')->name('produk.show');
    Route::get('edit/{id}', 'edit')->name('produk.edit');
    Route::put('edit/{id}', 'update')->name('produk.update');
    Route::delete('destroy/{id}', 'destroy')->name('produk.destroy');
});