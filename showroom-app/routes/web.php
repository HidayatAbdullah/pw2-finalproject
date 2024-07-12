<?php

use App\Http\Controllers\CarController;
use App\Http\Controllers\TypeController;
use App\Http\Controllers\LoanController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;

Route::get('/', function () {
    return view('welcomee');
});

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');

Route::get('/products', [ProductController::class, 'index']);

Route::get('/dashboard', function () {
    return view('welcome');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::resource('/cars', CarController::class);
    Route::resource('/types', TypeController::class);
    Route::resource('/loans', LoanController::class);
    Route::resource('/users', UserController::class);
});

Route::post('/welcomee', function () {
    return view('welcomee');
})->name('welcomee');

Route::post('/logout', function () {
    Auth::logout();
    return redirect()->route('welcomee');
})->name('logout');











require __DIR__.'/auth.php';
