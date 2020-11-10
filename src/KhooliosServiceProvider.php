<?php

namespace Majidalaeinia\Khoolios;

use Illuminate\Support\ServiceProvider;

class KhooliosServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot(): void
    {
        // $this->loadTranslationsFrom(__DIR__.'/../resources/lang', 'majidalaeinia');
        // $this->loadViewsFrom(__DIR__.'/../resources/views', 'majidalaeinia');
        // $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
        // $this->loadRoutesFrom(__DIR__.'/routes.php');

        // Publishing is only necessary when using the CLI.
        if ($this->app->runningInConsole()) {
            $this->bootForConsole();
        }
    }

    /**
     * Register any package services.
     *
     * @return void
     */
    public function register(): void
    {
        $this->mergeConfigFrom(__DIR__.'/../config/khoolios.php', 'khoolios');

        // Register the service the package provides.
        $this->app->singleton('khoolios', function ($app) {
            return new Khoolios;
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return ['khoolios'];
    }

    /**
     * Console-specific booting.
     *
     * @return void
     */
    protected function bootForConsole(): void
    {
        // Publishing the configuration file.
        $this->publishes([
            __DIR__.'/../config/khoolios.php' => config_path('khoolios.php'),
        ], 'khoolios.config');

        // Publishing the views.
        /*$this->publishes([
            __DIR__.'/../resources/views' => base_path('resources/views/vendor/majidalaeinia'),
        ], 'khoolios.views');*/

        // Publishing assets.
        /*$this->publishes([
            __DIR__.'/../resources/assets' => public_path('vendor/majidalaeinia'),
        ], 'khoolios.views');*/

        // Publishing the translation files.
        /*$this->publishes([
            __DIR__.'/../resources/lang' => resource_path('lang/vendor/majidalaeinia'),
        ], 'khoolios.views');*/

        // Registering package commands.
        // $this->commands([]);
    }
}
