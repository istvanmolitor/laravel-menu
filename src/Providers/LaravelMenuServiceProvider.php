<?php

namespace IstvanMolitor\LaravelMenu\Providers;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;
use IstvanMolitor\LaravelMenu\Libs\MenuRender;

class LaravelMenuServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'menu');
    }

    public function register()
    {
        $this->app->singleton('MenuRender', function ($app) {
            return new MenuRender();
        });
    }
}