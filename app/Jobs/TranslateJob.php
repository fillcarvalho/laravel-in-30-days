<?php

namespace App\Jobs;

use App\Models\Job;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Queue\Queueable;

class TranslateJob implements ShouldQueue
{
    use Queueable;

    /**
     * Create a new job instance.
     */
    public function __construct(public Job $jobListing) {}

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        // Do whatever you want to
        \logger('Hello from the translatejob: '.$this->jobListing->title);
    }
}
