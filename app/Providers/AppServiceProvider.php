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
            $hostingPath = env('HOSTING_PATH');
            $buildPath = $hostingPath . '/public_html/build';
            
            Vite::useManifestFilename($buildPath . '/manifest.json');
            Vite::useBuildDirectory($buildPath);
        }
    }
}
