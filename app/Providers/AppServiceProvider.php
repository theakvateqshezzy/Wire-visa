<?php

namespace App\Providers;

use App\Models\VisaRequest;
use App\Observers\VisaRequestObserver;
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
        VisaRequest::observe(VisaRequestObserver::class);
    }
}