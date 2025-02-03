<?php

namespace App\Http\Controllers;

use App\Models\Job;

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

        Job::create([
            'title'       => request('title'),
            'salary'      => request('salary'),
            'employer_id' => 1,
        ]);

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
        return view('jobs.edit', [
            'job' => $job,
        ]);
    }
}
