<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
        View::composer('*', function ($view) {
            //$view->with('globalurl', 'https://profile.pt-sena.co.id/upload/image/');
            $view->with('globalurl', 'http://127.0.0.1:8000/upload/image/');
        });
    }
}
