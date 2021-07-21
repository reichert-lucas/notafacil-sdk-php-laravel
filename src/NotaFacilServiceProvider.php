<?php

namespace Jetimob\NotaFacil;

use Illuminate\Container\Container;
use Illuminate\Support\ServiceProvider;
use Jetimob\NotaFacil\Console\InstallNotaFacilCommand;

class NotaFacilServiceProvider extends ServiceProvider
{
    /**
     * Boot the service provider.
     *
     * @return void
     */
    public function boot()
    {
        $src = realpath($raw = __DIR__ . '/../config/notafacil.php') ?: $raw;

        if ($this->app->runningInConsole()) {
            $this->publishes([
                $src => config_path('notafacil.php')
            ], 'config');

            $this->commands([
                InstallNotaFacilCommand::class,
            ]);
        }

        $this->mergeConfigFrom($src, 'notafacil');
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('jetimob.notafacil', function (Container $app) {
            return new NotaFacil($app['config']['notafacil'] ?? []);
        });

        $this->app->alias('jetimob.notafacil', NotaFacil::class);
    }

    /**
     * Get the services provided by the provider.
     *
     * @return string[]
     */
    public function provides()
    {
        return [
            'jetimob.notafacil',
        ];
    }
}
