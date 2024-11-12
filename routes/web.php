<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

// Route::get('/login', function () {
// return view('loginindex'); 
// });

// Route::get('/homepage', function () {
//    return view('index'); 
// });

// Route::get('/about', function () {
//   return view('about'); 
// });

 //make controller:
Route::get('/login', [HomeController::class, 'showLogin'])->name('login');
Route::get('/', [HomeController::class, 'showIndex'])->name('home');
Route::get('/about', [HomeController::class, 'showAbout'])->name('about');