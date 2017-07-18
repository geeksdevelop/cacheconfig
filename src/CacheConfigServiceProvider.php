<?php

namespace Geeksdevelop\Cacheconfig;

use Illuminate\Support\ServiceProvider;

class CacheConfigServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/config/default.php' => config_path('config.php')
        ]);

        $this->publishes([
            __DIR__.'/migrations/' => database_path('migrations')
        ], 'migrations');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
