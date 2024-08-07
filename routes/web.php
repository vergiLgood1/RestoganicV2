<?php

use Illuminate\Support\Facades\Route;

// Auth::routes();

Route::get('/signin', function () {
    return view('Auth/signIn', ['title' => "SignIn"]);
});

Route::get('/', function () {
    return view('pages/home', ['title' => "Home"]);
});

Route::get('/services', function () {
    return view('pages/services', ['title' => "Services"]);
});

Route::get('/shop', function () {
    return view('pages/shop', ['title' => "Shop"]);
});

Route::get('/contact', function () {
    return view('pages/contact', ['title' => "Contact"]);
});

Route::get('/dashboard', function () {
    return view('pages/dashboard', ['title' => "Dashboard"]);
});

