<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;

Route::get('/', function () {
    return view('dashboard.index');
})->name('dashboard');

Route::get('/report', [DashboardController::class, 'index'])->name('report');
Route::get('/report/export', [DashboardController::class, 'export'])->name('report.export');
