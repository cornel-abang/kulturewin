<?php

namespace App\Providers;

use App\Models\FAQ;
use App\Models\Event;
use Illuminate\Support\ServiceProvider;

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
        view()->share('faqs', FAQ::all());
        view()->share('events', Event::all());
    }
}
