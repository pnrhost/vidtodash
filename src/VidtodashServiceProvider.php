<?php

namespace Pnrhost\Vidtodash;

use Illuminate\Support\ServiceProvider;

class VidtodashServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {

        $this->loadRoutesFrom(__DIR__. '/Http/routes.php');

        $this->publishes([
            realpath(__DIR__.'/../../config/vidtodash.php') => config_path('vidtodash.php'),
        ]);
        $config = $this->app['config']['api'];
    }

    /**
     * Register any package services.
     *
     * @return void
     */
    public function register()
    {
         $this->app->singleton('vidtodash', function ($app) {
            return new Vidtodash;
         });
    }
}
