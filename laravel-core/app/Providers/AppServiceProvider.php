<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        if ($this->app->environment('production') || $this->app->environment('dev')) {
            URL::forceScheme('https');
        }
        //Public folder change
        $this->app->bind('path.public', function() {
            return base_path('../');
        });
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
    }
}
