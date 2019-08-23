<?php

namespace IstvanMolitor\LaravelMenu\Providers;

use Illuminate\Support\ServiceProvider;

class LaravelMenuServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'menu');
    }

    public function register()
    {
    }
}