<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
//use App\TestService;

class TestServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            'App\TestService',
            'App\TestServiceImpl'
        );
        // $this->app->singleton(TestService::class, function ($app) {
        //     return new TestService();
        // });
    }
}
