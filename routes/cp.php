<?php

use Illuminate\Support\Facades\Route;
use Silentz\Anvil\Http\Controllers\SitesController;
use Silentz\Anvil\Http\Controllers\Actions\DeploySiteController;
use Silentz\Anvil\Http\Controllers\Actions\DeploymentLogController;

Route::name('anvil.')->prefix('anvil')->group(function () {
    Route::get('/', [SitesController::class, '__invoke'])->name('index');
    Route::get('/sites', [SitesController::class, '__invoke'])->name('sites');
    Route::name('site.')->prefix('site/{site_id}')->group(function () {
        Route::post('deploy', [DeploySiteController::class, '__invoke'])->name('deploy');
        Route::get('deployment-log', [DeploymentLogController::class, '__invoke'])->name('deployment-log');
    });
});
