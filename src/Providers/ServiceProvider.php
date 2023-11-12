<?php

namespace Konnec\MaterializedViews\Providers;

use Illuminate\Support\ServiceProvider as Provider;

class ServiceProvider extends Provider
{
    public function boot(): void
    {
        $this->publishes([
            __DIR__ . '/../Config/eloquent-api.php' => config_path('materialized-views.php'),
        ]);
    }
}
