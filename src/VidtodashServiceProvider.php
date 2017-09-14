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
    }

    /**
     * Register any package services.
     *
     * @return void
     */
    public function register()
    {
        $this->registerVidtodash();
    }

    protected function registerVidtodash()
    {
        return new Vidtodash();
    }
}
