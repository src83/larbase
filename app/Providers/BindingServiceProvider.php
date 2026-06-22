<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class BindingServiceProvider extends ServiceProvider
{
    protected array $services = [];

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register(): void
    {
        $this->bindServices();
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot(): void
    {
        //
    }

    protected function bindServices(): void
    {
        foreach ($this->services as $name => $service) {
            $this->app->bind($name, fn () => new $service());
        }
    }
}
