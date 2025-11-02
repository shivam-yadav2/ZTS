<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Models\ContactUs;

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
        // Share contact info with all views
        View::composer('*', function ($view) {
            $contactInfo = ContactUs::first();
            $view->with('globalContactInfo', $contactInfo);
        });
    }
}
