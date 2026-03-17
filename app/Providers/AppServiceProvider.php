<?php

namespace App\Providers;

use App\Plume\Docs;
use App\Plume\Pages;
use Illuminate\Support\ServiceProvider;
use Meetplume\Plume\Facades\Plume;

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
        Plume::configure()
            ->vaults([
                Pages::class,
                Docs::class,
            ]);
    }
}
