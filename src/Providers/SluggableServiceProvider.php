<?php

namespace CodeTech\Sluggable\Providers;

use Carbon\Laravel\ServiceProvider;

class SluggableServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        // Load routes from custom path
        $this->loadRoutesFrom(__DIR__ . '/../routes/web.php');
    }
}
