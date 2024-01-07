<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\KamarController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\BookingController;

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

//register and login
Route::controller(AuthController::class)->group(function () {
    Route::get('/register', 'register')->name('register');
    Route::post('/register', 'registerSave')->name('register.save');

    Route::get('/login', 'login')->name('login');
    Route::post('/login', 'loginAction')->name('login.action');

    Route::get('/logut', 'logout')->middleware('auth')->name('logout');
});

//dashboard
Route::middleware('auth', 'admin')->group(function () {
    // Route::get('dashboard', function () {
    //     return view('dashboard');
    // })->name('dashboard');
    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');

    //kamar
    Route::controller(KamarController::class)->group(function () {
        Route::get('/kamar', 'index')->name('kamar');
        Route::get('/kamar/create', 'create')->name('kamar.create');
        Route::post('/kamar/create', 'store')->name('kamar.store');
        Route::get('show/{id}', 'show')->name('kamar.show');
        Route::get('/kamar/{id}/edit', 'edit')->name('kamar.edit');
        Route::put('/kamar/{id}/edit', 'update')->name('kamar.update');
        Route::delete('destroy/{id}', 'destroy')->name('kamar.destroy');
    });

    //user
    Route::get('/user', [App\Http\Controllers\UserController::class, 'index'])->name('user');
    //transaksi
    Route::get('transaksi', [TransaksiController::class, 'index'])->name('transaksi');
    //profile
    Route::get('/profile', [App\Http\Controllers\AuthController::class, 'profile'])->name('profile');
});

Route::middleware('auth')->group(function () {
    //booking
    Route::get('/booking/{id}', [TransaksiController::class, 'bookingRoom'])->name('booking');
    Route::post('transaksi/store', [TransaksiController::class, 'store'])->name('transaksi.store');
});

//detail room user
Route::get('/', [TransaksiController::class, 'home'])->name('home');
Route::get('/detail/{id}', [KamarController::class, 'detailkamar'])->name('detail.show');
