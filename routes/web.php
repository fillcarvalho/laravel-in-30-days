<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', static function () {
    return view('home');
});

Route::get('/jobs', static function () {
    return view('jobs', [
        'jobs' => [
            [
                'id'          => 1,
                'title'       => 'Job title 1',
                'description' => 'Description job title 1',
                'wage'        => '50000',
            ],
            [
                'id'          => 2,
                'title'       => 'Job title 2',
                'description' => 'Description job title 2',
                'wage'        => '60000',
            ],
            [
                'id'          => 3,
                'title'       => 'Job title 3',
                'description' => 'Description job title 3',
                'wage'        => '70000',
            ],
        ],
    ]);
});

Route::get('/job/{id}', static function ($id) {
    $jobs = [
        [
            'id'          => 1,
            'title'       => 'Job title 1',
            'description' => 'Description job title 1',
            'wage'        => '50000',
        ],
        [
            'id'          => 2,
            'title'       => 'Job title 2',
            'description' => 'Description job title 2',
            'wage'        => '60000',
        ],
        [
            'id'          => 3,
            'title'       => 'Job title 3',
            'description' => 'Description job title 3',
            'wage'        => '70000',
        ],
    ];

    $job = Arr::first($jobs, static fn($job) => $job['id'] == $id);

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
