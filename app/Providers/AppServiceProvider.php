<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $repositories = ['Base', 'Blogs', 'Slides', 'Footers'];

        foreach ($repositories as $model) {
            $this->app->bind(
                "App\Repositories\\{$model}\\{$model}RepositoryInterface",
                "App\Repositories\\{$model}\\{$model}EloquentRepository"
            );
        }
    }
}
