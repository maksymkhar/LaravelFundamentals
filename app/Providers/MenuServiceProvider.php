<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Route;

class MenuServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        echo "Jolo Compolo 1";
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        echo "Jolo Compolo 2";
    }
}
