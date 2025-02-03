<?php

use App\Http\Controllers\JobController;
use Illuminate\Support\Facades\Route;

Route::get('/', static function () {
    $states = config('app.states');

    return view('home', ['states' => $states]);
});
Route::view('/contact', 'contact');


//Route:controller(JobController::class)->group(function () {
//    Route::get('/jobs/create', 'create');
//    Route::get('/jobs', 'index');
//    Route::post('/jobs', 'store');
//    Route::get('/jobs/{job}', 'show');
//    Route::get('/jobs/{job}/edit', 'edit');
//    Route::patch('/jobs/{job}', 'update');
//    Route::delete('/jobs/{job}', 'destroy');
//});

Route::resource('jobs', JobController::class);



