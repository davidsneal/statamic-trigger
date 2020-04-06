<?php

use Illuminate\Support\Facades\Route;
use Davidsneal\Trigger\Http\Controllers\SiteController;
use Davidsneal\Trigger\Http\Controllers\Actions\DeploySiteController;
use Davidsneal\Trigger\Http\Controllers\Actions\DeploymentLogController;

Route::name('trigger.')->prefix('trigger')->group(function () {
    Route::get('/', [SiteController::class, '__invoke'])->name('index');
    Route::get('/site', [SiteController::class, '__invoke'])->name('site');
    Route::name('site.')->prefix('site')->group(function () {
        Route::post('deploy', [DeploySiteController::class, '__invoke'])->name('deploy');
        Route::get('deployment-log', [DeploymentLogController::class, '__invoke'])->name('deployment-log');
    });
});
