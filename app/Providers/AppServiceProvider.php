<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        env('PUBLIC_PATH') ? $this->app->usePublicPath(env('PUBLIC_PATH')) : '';
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}