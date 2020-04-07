<?php

namespace Davidsneal\Trigger;

use Statamic\Providers\AddonServiceProvider;
use Statamic\Facades\CP\Nav;
use Statamic\Facades\Permission;

class ServiceProvider extends AddonServiceProvider
{
    protected $routes = [
        'cp' => __DIR__ . '/../routes/cp.php',
    ];

    protected $scripts = [
        __DIR__.'/../dist/js/cp.js',
    ];

    public function boot()
    {
        parent::boot();

        $this->loadViewsFrom(__DIR__.'/../resources/views', 'trigger');
        $this->mergeConfigFrom(__DIR__ . '/../config/trigger.php', 'trigger');
        $this->loadTranslationsFrom(__DIR__ . '/../resources/lang', 'trigger');

        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../resources/lang' => resource_path('lang/vendor/davidsneal/trigger/'),
            ], 'Statamic Trigger Lang File');

            $this->publishes([
                __DIR__.'/../config/trigger.php' => config_path('trigger.php'),
            ], 'Statamic Trigger Config File');
        }

        $this->bootNavigation();
        $this->bootPermissions();
    }

    private function bootNavigation(): void
    {
        Nav::extend(function($nav) {
            $nav->create(__('trigger::lang.name'))
                ->icon(config('trigger.icon'))
                ->section('Tools')
                ->route(config('trigger.path').'.index')
                ->can('use trigger');
        });
    }

    private function bootPermissions() {
        $this->app->booted(function () {
            Permission::group('trigger', __('trigger::lang.name'), function () {
                Permission::register('use trigger')
                    ->label(__('trigger::lang.permission'));
            });
        });
    }
}
