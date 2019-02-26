<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class ComposerServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        View::composer(
            'profile', 'App\Http\ViewComposers\ProfileComposer'
        );
        
        View::composer(
            'welcome', 'App\Http\ViewComposers\ProfileComposer'
        );

        View::composer('dashboard', function ($view) {
            
        });

        View::composer('compose', function ($view) {

            
        });
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {


    }
}
