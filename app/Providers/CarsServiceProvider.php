<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class CarsServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $fuel = config('cars.fuel');
        $this->app->bind('\App\Cars\Fuel', $fuel);

    }
}
