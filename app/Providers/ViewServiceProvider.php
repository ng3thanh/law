<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class ViewServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer(['web.partials.footer',], 'App\ViewComposers\FooterComposer');
        view()->composer(['web.home',], 'App\ViewComposers\HomeComposer');
    }
}
