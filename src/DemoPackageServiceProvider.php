<?php

namespace Hore\DemoPackage;

use Illuminate\Support\ServiceProvider;

class DemoPackageServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
        $this->loadRoutesFrom(__DIR__.'/routes.php');


        $this->loadViewsFrom(__DIR__.'/../resources/views', 'demo');

        $this->publishes([
            __DIR__.'/../resources/views' => resource_path('views/vendor/demo'),
        ]);
    }
}
