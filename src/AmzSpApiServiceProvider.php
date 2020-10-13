<?php

namespace Thecodebunny\AmzSpApi;

use Illuminate\Support\ServiceProvider;

class AmzSpApiServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        /*
         * Optional methods to load your package assets
         */
        // $this->loadTranslationsFrom(__DIR__.'/../resources/lang', 'amz-sp-api');
        // $this->loadViewsFrom(__DIR__.'/../resources/views', 'amz-sp-api');
        // $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
        // $this->loadRoutesFrom(__DIR__.'/routes.php');

        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../config/config.php' => config_path('amz-sp-api.php'),
            ], 'config');

            // Publishing the views.
            /*$this->publishes([
                __DIR__.'/../resources/views' => resource_path('views/vendor/amz-sp-api'),
            ], 'views');*/

            // Publishing assets.
            /*$this->publishes([
                __DIR__.'/../resources/assets' => public_path('vendor/amz-sp-api'),
            ], 'assets');*/

            // Publishing the translation files.
            /*$this->publishes([
                __DIR__.'/../resources/lang' => resource_path('lang/vendor/amz-sp-api'),
            ], 'lang');*/

            // Registering package commands.
            // $this->commands([]);
        }
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        // Automatically apply the package configuration
        $this->mergeConfigFrom(__DIR__.'/../config/config.php', 'amz-sp-api');

        // Register the main class to use with the facade
        $this->app->singleton('amz-sp-api', function () {
            return new AmzSpApi;
        });
    }
}
