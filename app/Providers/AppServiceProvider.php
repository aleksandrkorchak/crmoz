<?php

namespace App\Providers;

use Illuminate\Contracts\Events\Dispatcher;
use Illuminate\Http\Client\Factory as BaseFactory;
use Illuminate\Support\ServiceProvider;
use App\Services\Smokills\Http\Client\Factory;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(
            BaseFactory::class,
            function ($app) {
                return new Factory($app->make(Dispatcher::class));
            }
        );
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
