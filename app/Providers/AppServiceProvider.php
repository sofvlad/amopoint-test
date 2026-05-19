<?php

namespace App\Providers;

use App\Repositories\JokeRepository;
use App\Repositories\JokeRepositoryInterface;
use App\Services\Clients\JokeClient;
use App\Services\JokeService;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->singleton(JokeClient::class);
        $this->app->singleton(JokeRepositoryInterface::class, JokeRepository::class);
        $this->app->singleton(JokeService::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
