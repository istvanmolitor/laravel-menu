<?php

namespace IstvanMolitor\LaravelMenu\Providers;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;
use IstvanMolitor\LaravelMenu\Libs\MenuManager;

class LaravelMenuServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'menu');

        Blade::directive('menu', function ($name) {
            return "<?php echo app('MenuManager')->render($name); ?>";
        });
    }

    public function register()
    {
        $this->app->singleton('MenuManager', function ($app) {
            return new MenuManager();
        });
    }
}