<?php

use Illuminate\Support\Facades\Route;
use Rmhl\LogAnalyzer\Controllers\PromptController;

Route::middleware(['web'])
    ->prefix('log-analyzer/prompts')
    ->name('log-analyzer.prompts.')
    ->group(function () {
        Route::get('/', [PromptController::class, 'index'])->name('index');
        Route::get('/create', [PromptController::class, 'create'])->name('create');
        Route::post('/', [PromptController::class, 'store'])->name('store');
        Route::get('/{prompt}/edit', [PromptController::class, 'edit'])->name('edit');
        Route::put('/{prompt}', [PromptController::class, 'update'])->name('update');
        Route::delete('/{prompt}', [PromptController::class, 'destroy'])->name('destroy');
    });
