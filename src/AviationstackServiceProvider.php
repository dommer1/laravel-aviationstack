<?php

namespace Dommer1\Aviationstack;

use Illuminate\Support\ServiceProvider;
use Dommer1\Aviationstack\Aviationstack;

class AviationstackServiceProvider extends ServiceProvider {

    /**
     * Boot the service provider.
     */
    public function boot() {

        if (function_exists('config_path')) {
            $this->publishes([
                __DIR__ . '/../config/aviationstack.php' => config_path('aviationstack.php'),
            ], 'config');
        }
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register() {
        $this->mergeConfigFrom(
            __DIR__ . '/../config/aviationstack.php',
            'aviationstack'
        );
    }
}
