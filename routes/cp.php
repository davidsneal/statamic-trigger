<?php

use Illuminate\Support\Facades\Route;
use Edalzell\Anvil\Http\Controllers\SiteController;
use Edalzell\Anvil\Http\Controllers\Actions\DeploySiteController;
use Edalzell\Anvil\Http\Controllers\Actions\DeploymentLogController;

Route::name('anvil.')->prefix('anvil')->group(function () {
    Route::get('/', [SiteController::class, '__invoke'])->name('index');
    Route::get('/site', [SiteController::class, '__invoke'])->name('site');
    Route::name('site.')->prefix('site')->group(function () {
        Route::post('deploy', [DeploySiteController::class, '__invoke'])->name('deploy');
        Route::get('deployment-log', [DeploymentLogController::class, '__invoke'])->name('deployment-log');
    });
});
