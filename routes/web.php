<?php

use Illuminate\Support\Facades\Route;

Route::get('/', static function () {
    return view('home');
});

Route::get('/about', static function () {
    return view('about');
});

Route::get('/about2', static function () {
    return ['foo' => 'bar'];
});

Route::get('/about3', static function () {
    return "about page";
});

Route::get('/contact', static function () {
    return view('contact');
});
