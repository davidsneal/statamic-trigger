<?php

namespace Edalzell\Anvil;

use Statamic\Facades\Utility;
use Statamic\Providers\AddonServiceProvider;
use Edalzell\Anvil\Http\Controllers\SiteController;
use Edalzell\Anvil\Http\Controllers\Actions\DeploySiteController;
use Edalzell\Anvil\Http\Controllers\Actions\DeploymentLogController;

class ServiceProvider extends AddonServiceProvider
{
    protected $scripts = [
        __DIR__.'/resources/js/cp.js',
    ];

    public function boot()
    {
        parent::boot();

        $this->loadViewsFrom(__DIR__.'/../resources/views', 'anvil');

        $this->publishes([
            __DIR__.'/../config/anvil.php' => config_path('anvil.php'),
        ]);

        $utility = Utility::make('anvil')
            ->action(SiteController::class)
            ->icon('hammer-wrench')
            ->description('Manage your Forge Site');

        $utility->routes(function ($router) {
            $router->post('deploy', [DeploySiteController::class, '__invoke'])->name('deploy');
            $router->get('deployment-log', [DeploymentLogController::class, '__invoke'])->name('deployment-log');
        });

        $utility->register();
    }
}
