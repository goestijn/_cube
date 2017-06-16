<?php

namespace App\Modules\Admin\Providers;

use Caffeinated\Modules\Support\ServiceProvider;

class ModuleServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the module services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadTranslationsFrom(__DIR__.'/../Resources/Lang', 'admin');
        $this->loadViewsFrom(__DIR__.'/../Resources/Views', 'admin');
        $this->loadMigrationsFrom(__DIR__.'/../Database/Migrations', 'admin');
        $this->publishes([
            __DIR__. '/../Assets/css' => public_path('css/admin'),
            __DIR__. '/../Assets/fonts' => public_path('fonts/admin'),
            __DIR__. '/../Assets/js' => public_path('js/admin'),
            __DIR__. '/../Assets/vendors' => public_path('vendors/admin')
        ], 'admin');
    }

    /**
     * Register the module services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->register(RouteServiceProvider::class);
    }
}
