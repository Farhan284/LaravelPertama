<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome'); //meruju ke file welcome, blade, php di folder resource
});

Route::get('/login', function () {
    return view('loginindex'); //meruju ke file welcome, blade, php di folder resource
});

Route::get('/homepage', function () {
    return view('index'); //meruju ke file welcome, blade, php di folder resource
});


