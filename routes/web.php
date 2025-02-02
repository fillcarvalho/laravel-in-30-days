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
    request()->validate([
        'title'  => ['required', 'min:3'],
        'salary' => ['required', 'numeric'],
    ]);

    Job::create([
        'title'       => request('title'),
        'salary'      => request('salary'),
        'employer_id' => 1,
    ]);

    return redirect('/jobs');
});

Route::get('/jobs/{job}', static function (Job $job) {
    return view('jobs.show', [
        'job' => $job,
    ]);
});

// Edit
Route::get('/jobs/{job}/edit', static function (Job $job) {
    return view('jobs.edit', [
        'job' => $job,
    ]);
});

// Update
Route::patch('/jobs/{job}', static function (Job $job) {
    request()->validate([
        'title'  => ['required', 'min:3'],
        'salary' => ['required', 'numeric'],
    ]);

    $job->update([
        'title'  => request('title'),
        'salary' => request('salary'),
    ]);

    return redirect('/jobs/'.$job->id);
});

// Destroy
Route::delete('/jobs/{job}', static function (Job $job) {

    $job->delete();

    return redirect('/jobs/');
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
