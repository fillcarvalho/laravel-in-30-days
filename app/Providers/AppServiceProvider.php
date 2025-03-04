<?php

namespace App\Providers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Model::preventLazyLoading(true);

        // Setting it to use tailwind all the time.
        Paginator::useTailwind();

        //        Gate::define('edit-job', static function(User $user,Job $job) {
        //            return $job->employer->user->is( $user );
        //        });

    }
}
