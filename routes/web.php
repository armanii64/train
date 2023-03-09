<?php

use App\Http\Controllers\CompositionController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\FreightController;
use App\Http\Controllers\LocomotiveController;
use App\Http\Controllers\PassengerController;
use App\Http\Controllers\RollingStockController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Auth::routes();

Route::group(['middleware' => 'auth'], function () {
    Route::get('/', function () {
        return redirect('/events');
    });
    Route::get('/home', function () {
        return redirect('/events');
    });

    Route::get('/events', [EventController::class, 'index'])->name('event.index');

    Route::group(['prefix' => 'rollingstocks'], function () {
        Route::get('/create', [RollingStockController::class, 'create'])->name('rollingStock.create');
        Route::post('/', [RollingStockController::class, 'store'])->name('rollingStock.store');
        Route::get('/{id}/edit', [RollingStockController::class, 'edit'])->name('rollingStock.edit');
        Route::put('/{id}', [RollingStockController::class, 'update'])->name('rollingStock.update');
        Route::get('/{id}', [RollingStockController::class, 'show'])->name('rollingStock.show');
    });
    Route::group(['prefix' => 'locomotives'], function () {
        Route::get('/', [LocomotiveController::class, 'index'])->name('locomotive.index');
        Route::delete('/{id}', [LocomotiveController::class, 'destroy'])->name('locomotive.delete');
    });
    Route::group(['prefix' => 'passengers'], function () {
        Route::get('/', [PassengerController::class, 'index'])->name('passenger.index');
        Route::delete('/{id}', [PassengerController::class, 'destroy'])->name('passenger.delete');
    });
    Route::group(['prefix' => 'freights'], function () {
        Route::get('/', [FreightController::class, 'index'])->name('freight.index');
        Route::get('/{id}/export',[FreightController::class, 'export'])->name('freight.export');
        Route::delete('/{id}', [FreightController::class, 'destroy'])->name('freight.delete');
    });
    Route::group(['prefix' => 'compositions'], function () {
        Route::group(['middleware' => 'admin'], function () {
            Route::get('/for-events', [CompositionController::class, 'indexForEvents'])->name('composition.index-for-events');
        });
        Route::get('/', [CompositionController::class, 'index'])->name('composition.index');
        Route::get('/create', [CompositionController::class, 'create'])->name('composition.create');
        Route::post('/', [CompositionController::class, 'store'])->name('composition.store');
        Route::get('/{id}/edit', [CompositionController::class, 'edit'])->name('composition.edit');
        Route::put('/{id}', [CompositionController::class, 'update'])->name('composition.update');
        Route::put('/change-status/{id}', [CompositionController::class, 'changeStatus'])->name('composition.changeStatus');
        Route::get('/{id}', [CompositionController::class, 'show'])->name('composition.show');
        Route::delete('/{id}', [CompositionController::class, 'destroy'])->name('composition.delete');
    });
});

Route::group(['middleware' => 'admin'], function () {
    Route::group(['prefix' => 'events'], function () {
        Route::get('/create', [EventController::class, 'create'])->name('event.create');
        Route::post('/', [EventController::class, 'store'])->name('event.store');
        Route::get('/{id}/edit', [EventController::class, 'edit'])->name('event.edit');
        Route::put('/{id}', [EventController::class, 'update'])->name('event.update');
        Route::delete('/{id}', [EventController::class, 'destroy'])->name('event.delete');
    });
});
