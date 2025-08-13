<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Vite;

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
        // Configuration Vite pour structure Hostinger
        if (app()->environment('production')) {
            Vite::useManifestFilename('../public_html/build/manifest.json');
            Vite::useBuildDirectory('../public_html/build');
        }
    }
}
