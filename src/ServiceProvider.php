<?php

namespace Davidsneal\Trigger;

use Statamic\Providers\AddonServiceProvider;
use Statamic\Facades\Utility;
use Davidsneal\Trigger\Http\Controllers\SiteController;
use Davidsneal\Trigger\Http\Controllers\Actions\TriggerController;

class ServiceProvider extends AddonServiceProvider
{
    protected $scripts = [
        __DIR__.'/../dist/js/cp.js',
    ];

    public function boot()
    {
        parent::boot();
        // Statamic::script('trigger', 'cp.js');

        $this->loadViewsFrom(__DIR__.'/../resources/views', 'trigger');

        $this->publishes([
            __DIR__.'/../config/trigger.php' => config_path('trigger.php'),
        ]);

        $utility = Utility::make('trigger')
            ->action(SiteController::class)
            ->icon('hammer-wrench')
            ->description('Deploy your Site');

        $utility->routes(function ($router) {
            $router->post('trigger', [TriggerController::class, '__invoke'])->name('trigger');
        });

        $utility->register();
    }
}
