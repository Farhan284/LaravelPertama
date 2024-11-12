<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function showLogin() {
        return view('loginindex');
    }
    public function showIndex() {
        return view('index');
    }

    public function showAbout() {
        return view('about');
    }
}