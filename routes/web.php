<?php

use App\Http\Controllers\JobController;
use App\Http\Controllers\RegisteredUserController;
use App\Http\Controllers\SessionController;
use App\Jobs\TranslateJob;
use App\Models\Job;
use Illuminate\Support\Facades\Route;

Route::get('test', static function () {
    TranslateJob::dispatch(Job::first());

    return 'Done';
});

Route::get('/', static function () {
    $states = config('app.states');

    return view('home', ['states' => $states]);
});
Route::view('/contact', 'contact');


Route::controller(JobController::class)->group(function () {
    Route::get('/jobs/create', 'create')->middleware('auth');
    Route::get('/jobs', 'index');
    Route::post('/jobs', 'store')->middleware('auth');
    Route::get('/jobs/{job}', 'show');
    //    Route::get('/jobs/{job}/edit', 'edit')->middleware(['auth', 'can:edit-job,job']);

    Route::get('/jobs/{job}/edit', 'edit')
        ->middleware('auth')
        ->can('edit', 'job');

    Route::patch('/jobs/{job}', 'update')
        ->middleware('auth')
        ->can('edit', 'job');

    Route::delete('/jobs/{job}', 'destroy')
        ->middleware('auth')
        ->can('edit', 'job');
});

// If you want to apply this middlewhere only on index
//Route::resource('jobs', JobController::class)->only(['index'])->middleware('auth');

// If you want to apply this middlewhere except on index
//Route::resource('jobs', JobController::class)->except(['index'])->middleware('auth');


// Auth
Route::get('/register', [RegisteredUserController::class, 'create']);
Route::post('/register', [RegisteredUserController::class, 'store']);


Route::get('/login', [SessionController::class, 'create'])->name('login');
Route::post('/login', [SessionController::class, 'store']);
Route::post('/logout', [SessionController::class, 'destroy']);



