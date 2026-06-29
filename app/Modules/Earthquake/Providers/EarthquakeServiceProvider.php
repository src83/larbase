<?php

namespace App\Modules\Earthquake\Providers;

use App\Modules\Earthquake\Integrations\Earthquake\AfadEarthquakeProvider;
use App\Modules\Earthquake\Integrations\Earthquake\EarthquakeProviderInterface;
use App\Modules\Earthquake\Console\Commands\EarthquakeUpdate;
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

        if ($this->app->runningInConsole()) {
            $this->commands([EarthquakeUpdate::class]);
        }
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
