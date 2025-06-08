<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\AboutController;
use App\Http\Controllers\Admin\MediaController;

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

Route::get('/', [PageController::class, 'index'])->name('pages.index');
Route::get('/admin/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');

//About Routes//
Route::get('/admin/abouts', [AboutController::class, 'edit'])->name('admin.abouts.edit');
Route::patch('/admin/abouts', [AboutController::class, 'update'])->name('admin.abouts.update');

//Media Routes//
Route::get('/admin/medias', [MediaController::class, 'index'])->name('admin.medias.index');
Route::post('/admin/medias', [MediaController::class, 'store'])->name('admin.medias.store');
Route::delete('/admin/medias/{media}', [MediaController::class, 'destroy'])->name('admin.medias.destroy');






Route::get('/{any}', function () {
    return view('notFoundPage');
})->where('any', '.*');