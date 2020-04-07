<?php

use Illuminate\Support\Facades\Route;
use Davidsneal\Trigger\Http\Controllers\SiteController;
use Davidsneal\Trigger\Http\Controllers\Actions\TriggerController;

Route::name(config('trigger.path').'.')->prefix(config('trigger.path'))->group(function () {
    Route::get('/', [SiteController::class, '__invoke'])->name('index');
    Route::post('/', [TriggerController::class, '__invoke'])->name('fire');
});
