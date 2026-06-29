<?php

namespace App\Modules\Earthquake\Providers;

use App\Modules\Earthquake\Integrations\Earthquake\AfadEarthquakeProvider;
use App\Modules\Earthquake\Integrations\Earthquake\EarthquakeProviderInterface;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;

class EarthquakeServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->mergeConfigFrom(__DIR__.'/../config/earthquake.php', 'earthquake');
        $this->app->bind(EarthquakeProviderInterface::class, AfadEarthquakeProvider::class);
    }

    public function boot(): void
    {
        $this->loadRoutes();
        $this->loadMigrations();
    }

    protected function loadRoutes(): void
    {
        Route::middleware(['api'])
            ->prefix('api')
            ->as('api.')
            ->group(__DIR__.'/../routes/api.php');
    }

    protected function loadMigrations(): void
    {
        $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
    }
}
