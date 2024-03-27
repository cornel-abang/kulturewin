<?php

namespace App\Providers;

use App\Models\FAQ;
use App\Models\Event;
use Illuminate\Support\Facades\App;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        if (App::environment('production')) {
            $this->app->bind('path.public', function() {
                return base_path('kulturewin_app');
            });
        }
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
