<?php

use App\Modules\Test\Http\Controllers\Api\TestController;
use Illuminate\Support\Facades\Route;

/**
 * Test module routes (example/demo controller)
 * http://larbase.loc/api/test
 */
Route::group([
    'prefix' => 'test',
], static function () {
    Route::get('/', [TestController::class, 'index'])->name('public.test.list');
    Route::post('/', [TestController::class, 'store'])->name('public.test.store');
    Route::get('/{id}', [TestController::class, 'show'])->name('public.test.show');
    Route::match(['put', 'patch'], '/{id}', [TestController::class, 'update'])->name('public.test.update');
    Route::delete('/{id}', [TestController::class, 'destroy'])->name('public.test.destroy');

    Route::get('/exception', [TestController::class, 'exception'])->name('public.test.exception');
    Route::get('/get-error', [TestController::class, 'getError'])->name('public.test.get-error');
});
