<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\KamarController;


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

Route::get('/', function () {
    return view('home');
});

//register and login
Route::controller(AuthController::class)->group(function () {
    Route::get('/register', 'register')->name('register');
    Route::post('/register', 'registerSave')->name('register.save');

    Route::get('/login', 'login')->name('login');
    Route::post('/login', 'loginAction')->name('login.action');

    Route::get('/logut', 'logout')->middleware('auth')->name('logout');
});

//dashboard
Route::middleware('auth')->group(function () {
    Route::get('dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

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

    Route::get('/profile', [App\Http\Controllers\AuthController::class, 'profile'])->name('profile');
});

Route::get('/home', [App\Http\Controllers\landingpageController::class, 'landingpage']);
