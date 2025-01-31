<?php

use App\Models\Job;
use Illuminate\Support\Facades\Route;

Route::get('/', static function () {
    $states = config('app.states');

    return view('home', ['states' => $states]);
});

Route::get('/jobs/create', static function () {
    return view('jobs.create');
});

Route::get('/jobs', static function () {
    $Jobs = Job::with('employer')->latest()->paginate(5);

    return view('jobs.index', ['jobs' => $Jobs]);
});

Route::post('/jobs', static function () {
    Job::create([
        'title'       => request('title'),
        'salary'      => request('salary'),
        'employer_id' => 1,
    ]);

    return redirect('/jobs');
});

Route::get('/job/{id}', static function ($id) {
    $job = Job::find($id);

    return view('jobs.show', [
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
