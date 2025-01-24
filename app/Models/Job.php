<?php

namespace App\Models;

use Illuminate\Support\Arr;

class Job
{

    public static function find(int $id): array
    {
        $job = Arr::first(static::all(), static fn($job) => $job['id'] == $id);

        if (!$job) {
            abort(404);
        }
        return $job;
    }

    public static function all(): array
    {
        return [
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
    }
}
