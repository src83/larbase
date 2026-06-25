<?php

namespace App\Modules\Test\Providers;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;

class TestServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        //
    }

    public function boot(): void
    {
        $this->loadRoutes();
    }

    protected function loadRoutes(): void
    {
        Route::middleware(['api'])
            ->prefix('api')
            ->as('api.')
            ->group(__DIR__.'/../routes/api.php');
    }
}
