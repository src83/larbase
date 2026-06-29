<?php

declare(strict_types=1);

namespace App\Modules\Earthquake\Providers;

use App\Modules\Earthquake\Console\Commands\EarthquakeUpdate;
use App\Modules\Earthquake\Integrations\Earthquake\AfadEarthquakeProvider;
use App\Modules\Earthquake\Integrations\Earthquake\EarthquakeProviderInterface;
use Illuminate\Support\Facades\Config;
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
        $this->loadViews();
        $this->loadMigrations();
        $this->loadCommands();
    }

    protected function loadRoutes(): void
    {
        Route::middleware(['api'])
            ->prefix(Config::get('constants.API_PREFIX'))
            ->as('api.')
            ->group(__DIR__.'/../routes/api.php');

        Route::middleware(['web', 'auth'])
            ->prefix('cabinet')
            ->as('cabinet.')
            ->group(__DIR__.'/../routes/cabinet.php');
    }

    protected function loadViews(): void
    {
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'earthquake');
    }

    protected function loadMigrations(): void
    {
        $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
    }

    protected function loadCommands(): void
    {
        if ($this->app->runningInConsole()) {
            $this->commands([EarthquakeUpdate::class]);
        }
    }
}
