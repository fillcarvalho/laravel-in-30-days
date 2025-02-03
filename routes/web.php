<?php

use App\Http\Controllers\JobController;
use App\Http\Controllers\RegisteredUserController;
use App\Http\Controllers\SessionController;
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

// Auth
Route::get('/register', [RegisteredUserController::class, 'create']);
Route::post('/register', [RegisteredUserController::class, 'store']);


Route::get('/login', [SessionController::class, 'login']);
Route::post('/login', [SessionController::class, 'store']);
Route::post('/logout', [SessionController::class, 'destroy']);



