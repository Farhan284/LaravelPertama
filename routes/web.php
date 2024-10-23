<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome'); //meruju ke file welcome, blade, php di folder resource
});

Route::get('/login', function () {
    return view('loginindex'); 
});

Route::get('/homepage', function () {
    return view('index'); 
});

Route::get('/about', function () {
    return view('about'); 
});