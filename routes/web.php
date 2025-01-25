<?php

use App\Models\Job;
use Illuminate\Support\Facades\Route;

Route::get('/', static function () {
    return view('home');
});

Route::get('/jobs', static function () {
    $Jobs = Job::with('employer')->simplePaginate(5);

    return view('jobs', ['jobs' => $Jobs]);
});

Route::get('/job/{id}', static function ($id) {
    $job = Job::find($id);

    return view('job', [
        'job' => $job,
    ]);
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
