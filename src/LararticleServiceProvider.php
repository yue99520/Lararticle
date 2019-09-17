<?php

namespace yue99520\Lararticle;

use Illuminate\Support\ServiceProvider;

class LararticleServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
        // $this->loadTranslationsFrom(__DIR__.'/../resources/lang', 'yue99520');
        // $this->loadViewsFrom(__DIR__.'/../resources/views', 'yue99520');
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
    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/../config/lararticle.php', 'lararticle');

        // Register the service the package provides.
        $this->app->singleton('lararticle', function ($app) {
            return new Lararticle;
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return ['lararticle'];
    }
    
    /**
     * Console-specific booting.
     *
     * @return void
     */
    protected function bootForConsole()
    {
        // Publishing the configuration file.
        $this->publishes([
            __DIR__.'/../config/lararticle.php' => config_path('lararticle.php'),
        ], 'lararticle.config');

        // Publishing the views.
        /*$this->publishes([
            __DIR__.'/../resources/views' => base_path('resources/views/vendor/yue99520'),
        ], 'lararticle.views');*/

        // Publishing assets.
        /*$this->publishes([
            __DIR__.'/../resources/assets' => public_path('vendor/yue99520'),
        ], 'lararticle.views');*/

        // Publishing the translation files.
        /*$this->publishes([
            __DIR__.'/../resources/lang' => resource_path('lang/vendor/yue99520'),
        ], 'lararticle.views');*/

        // Registering package commands.
        // $this->commands([]);
    }
}
