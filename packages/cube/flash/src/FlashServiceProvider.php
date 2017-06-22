<?php

namespace Cube\Flash;

use Illuminate\Support\ServiceProvider;

class FlashServiceProvider extends ServiceProvider
{
    
    public function boot()
    {
        //
    }

    
    public function register()
    {
        
        $this->app->singleton('flash', 'Cube\Flash\Flash');

    }

}
