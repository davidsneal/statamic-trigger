<?php

use Illuminate\Support\Facades\Route;
use Silentz\Anvil\Http\Controllers\SiteController;
use Silentz\Anvil\Http\Controllers\ServerController;
use Silentz\Anvil\Http\Controllers\Actions\DeploySiteController;
use Silentz\Anvil\Http\Controllers\Actions\DeploymentLogController;

Route::name('anvil.')->prefix('anvil')->group(function () {
    Route::get('/', [ServerController::class, 'index'])->name('index');
    Route::get('{server}/sites', [SiteController::class, 'index'])->name('sites');

    Route::name('site.')->prefix('{server}/site/{site_id}')->group(function () {
        Route::post('deploy', [DeploySiteController::class, '__invoke'])->name('deploy');
        Route::get('deployment-log', [DeploymentLogController::class, '__invoke'])->name('deployment-log');
    });
});
