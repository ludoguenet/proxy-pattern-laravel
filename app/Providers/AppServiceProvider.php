<?php

namespace App\Providers;

use App\Services\PodcastService;
use Illuminate\Support\ServiceProvider;
use App\Contracts\PodcastServiceContract;
use App\Proxy\PodcastServiceProxy;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        app()->singleton(PodcastServiceContract::class, function () {
            return new PodcastServiceProxy(new PodcastService);
        });
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
