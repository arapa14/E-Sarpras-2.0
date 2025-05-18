<?php

namespace App\Providers;

use App\Models\Setting;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class SettingsServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        // Ambil dari cache, atau simpan selama 60 menit jika belum ada
        $settings = Cache::remember('settings', 60, function() {
            return Setting::first();
        });

        // Bagikan ke semua view
        View::share('name', $settings->name ?? 'E-Sarpras');
        View::share('logo', $settings->logo ?? 'storage/logos/E-Sarpras.png');

        // jangan lupa clear cache saat perubahan terjadi
        // Cache::forget('settings');
    }
}
