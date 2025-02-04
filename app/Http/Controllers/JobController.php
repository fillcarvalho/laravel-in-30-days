<?php

namespace App\Http\Controllers;

use App\Jobs\TranslateJob;
use App\Mail\JobPosted;
use App\Models\Job;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class JobController extends Controller
{

    public function index()
    {
        $Jobs = Job::with('employer')->latest()->paginate(5);

        return view('jobs.index', ['jobs' => $Jobs]);
    }

    public function store()
    {
        request()->validate([
            'title'  => ['required', 'min:3'],
            'salary' => ['required', 'numeric'],
        ]);

        $job = Job::create([
            'title'       => request('title'),
            'salary'      => request('salary'),
            'employer_id' => 1,
            'user_id' => Auth::id(),
        ]);

        Mail::to($job->employer->user)->queue(
            new JobPosted($job)
        );

        TranslateJob::dispatch($job);

        return redirect('/jobs');
    }

    public function create()
    {
        return view('jobs.create');
    }

    public function show(Job $job)
    {
        return view('jobs.show', [
            'job' => $job,
        ]);
    }

    public function destroy(Job $job)
    {
        $job->delete();

        return redirect('/jobs/');
    }

    public function update(Job $job)
    {
        request()->validate([
            'title'  => ['required', 'min:3'],
            'salary' => ['required', 'numeric'],
        ]);

        $job->update([
            'title'  => request('title'),
            'salary' => request('salary'),
        ]);

        return redirect('/jobs/'.$job->id);
    }

    public function edit(Job $job)
    {
        // Alternativa way
        //        Auth::user()->can('edit-job', $job);

        //        Gate::authorize('edit-job', $job);


        return view('jobs.edit', [
            'job' => $job,
        ]);
    }
}
