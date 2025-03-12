<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

/* Route::get('/', function () {
    return view('welcome');
}); */

Auth::routes();

Route::middleware(['auth', 'user-access:user'])->group(function () {
    Route::get('/', [HomeController::class, 'index'])->name('home');
});

Route::middleware(['auth', 'user-access:admin'])->group(function () {
  
    Route::get('/admin/home', [HomeController::class, 'adminHome'])->name('admin.home');
});

