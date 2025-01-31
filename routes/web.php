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

Route::get('/jobs/{id}', static function ($id) {
    $job = Job::find($id);

    return view('jobs.show', [
        'job' => $job,
    ]);
});

// Edit
Route::get('/jobs/{id}/edit', static function ($id) {
    $job = Job::find($id);

    return view('jobs.edit', [
        'job' => $job,
    ]);
});

// Update
Route::patch('/jobs/{id}', static function ($id) {
    request()->validate([
        'title'  => ['required', 'min:3'],
        'salary' => ['required', 'numeric'],
    ]);

    $job = Job::findOrFail($id);

    $job->update([
        'title'  => request('title'),
        'salary' => request('salary'),
    ]);

    return redirect('/jobs/'.$job->id);
});

// Destroy
Route::delete('/jobs/{id}', static function ($id) {
    $job = Job::findOrFail($id);

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
