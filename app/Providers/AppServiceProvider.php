<?php

namespace App\Providers;

use App\Models\Setting;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        view()->composer('admin.login', function ($view) {
            $view->with('settings', Setting::first());
        });

        view()->composer('frontend.layouts.footer', function ($view) {
            $view->with('settings', Setting::first());
        });

        view()->composer('frontend.welcome', function ($view) {
            $view->with('settings', Setting::first());
        });

        view()->composer('frontend.layouts.main-headerbar', function ($view) {
            $view->with('settings', Setting::first());
        });
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
