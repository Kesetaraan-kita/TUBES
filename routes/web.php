<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AuthControllerRegister;

// Halaman utama
Route::get('/', function () {
    return view('welcome
    ');
});


// Rute untuk login
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login'); // Menampilkan form login
Route::post('/login', [LoginController::class, 'login'])->name('login.process'); // Proses login
Route::post('/logout', [LoginController::class, 'logout'])->name('logout'); // Logout

// Rute untuk register
Route::get('/register', [AuthControllerRegister::class, 'showRegisterForm'])->name('register');
Route::post('/register', [AuthControllerRegister::class, 'register']);

//Rute untuk dashboard (dengan middleware auth)
Route::get('/dashboard', function () {
    return view('dashboard'); // Pastikan file `dashboard.blade.php` ada di folder `resources/views`
})->middleware('auth')->name('dashboard');

Route::get('/event', function () {
    return view('event.event'); // Pastikan file `dashboard.blade.php` ada di folder `resources/views`
})->middleware('auth')->name('dashboard');
