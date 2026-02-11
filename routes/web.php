<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\TgvRequestController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/admin', [DashboardController::class, 'index'])->name('admin.dashboard');

// Routes TGV - Publiques
Route::prefix('tgv')->name('tgv.')->group(function () {
    Route::get('/{serviceType}/form', [TgvRequestController::class, 'showForm'])
        ->name('form')
        ->where('serviceType', 'Corpus|Essentiel|Avancé|Consacré|VIP|Diamant|Or|Argent');
    
    Route::post('/submit', [TgvRequestController::class, 'store'])
        ->name('store');
    
    Route::get('/stats', [TgvRequestController::class, 'getStatistics'])
        ->name('stats');
});

// Routes TGV Admin
Route::prefix('admin/tgv')->name('admin.tgv.')->group(function () {
    Route::get('/requests', [TgvRequestController::class, 'index'])
        ->name('requests');
    
    Route::get('/requests/{request}', [TgvRequestController::class, 'show'])
        ->name('show');
    
    Route::post('/requests/{tgvRequest}/accept', [TgvRequestController::class, 'accept'])
        ->name('accept');
    
    Route::post('/requests/{tgvRequest}/reject', [TgvRequestController::class, 'reject'])
        ->name('reject');
    
    Route::post('/requests/{tgvRequest}/archive', [TgvRequestController::class, 'archive'])
        ->name('archive');
    
    Route::delete('/requests/{tgvRequest}', [TgvRequestController::class, 'destroy'])
        ->name('destroy');
});
