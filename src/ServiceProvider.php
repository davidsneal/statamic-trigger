<?php

namespace Silentz\Anvil;

use Statamic\Facades\Nav;
use Statamic\CP\Navigation\NavItem;
use Statamic\Providers\AddonServiceProvider;

class ServiceProvider extends AddonServiceProvider
{
    protected $routes = [
        'cp' => __DIR__.'/../routes/cp.php',
    ];

    public function boot()
    {
        parent::boot();

        $this->loadViewsFrom(__DIR__.'/../resources/views', 'anvil');

        Nav::extend(function ($nav) {
            $nav->tools('Anvil')
                ->route('anvil.index')
                ->icon('shopping-cart');
        });
    }
}
