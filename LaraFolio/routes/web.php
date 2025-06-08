<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\AboutController;


Route::get('/', [PageController::class, 'index'])->name('pages.index');
Route::get('/admin/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');
Route::get('/admin/abouts', [AboutController::class, 'edit'])->name('admin.abouts.edit');
Route::patch('/admin/abouts/{id}', [AboutController::class, 'update'])->name('admin.abouts.update');





Route::get('/{any}', function () {
    return view('notFoundPage');
})->where('any', '.*');