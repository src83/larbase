<?php

use App\Modules\Earthquake\Http\Controllers\Cabinet\Ajax\EventsAjaxController;
use App\Modules\Earthquake\Http\Controllers\Cabinet\EventsController;
use Illuminate\Support\Facades\Route;

/**
 * Example module (placeholder for new features)
 */
Route::group([
    'prefix' => 'events',
], static function () {
    Route::get('/', [EventsController::class, 'index'])->name('events');
});

/**
 * Ajax-маршруты (placeholder for new features)
 * http://*****.loc/cabinet/events/ajax
 */
Route::group([
    'prefix' => 'events/ajax',
], static function () {
    Route::get('/entities', [EventsAjaxController::class, 'index'])->name('events.ajax.entities.index');
    Route::post('/entities', [EventsAjaxController::class, 'store'])->name('events.ajax.entities.store');
});
