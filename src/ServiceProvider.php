<?php

namespace Silentz\Anvil;

use Statamic\Facades\Nav;
use Statamic\Facades\Utility;
use Statamic\Providers\AddonServiceProvider;
use Silentz\Anvil\Http\Controllers\SiteController;

class ServiceProvider extends AddonServiceProvider
{
    protected $routes = [
        'cp' => __DIR__.'/../routes/cp.php',
    ];

    public function boot()
    {
        parent::boot();

        $this->loadViewsFrom(__DIR__.'/../resources/views', 'anvil');

        $this->publishes([
            __DIR__.'/../config/anvil.php' => config_path('anvil.php'),
        ]);

        Utility::make('anvil')
            ->action(SiteController::class)
            ->icon('hammer-wrench')
            ->description('Manage your Forge Site')
            ->register();
    }
}
