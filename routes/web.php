<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\AboutController;
use App\Http\Controllers\Admin\MediaController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\SkillController;
use App\Http\Controllers\Admin\EducationController;
use App\Http\Controllers\Admin\ExperienceController;
use App\Http\Controllers\Admin\ProjectController;
use App\Http\Controllers\Admin\TestimonialController;
use App\Http\Controllers\Admin\MessageController;
use App\Http\Controllers\Admin\UserController;

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

//Service Routes//
Route::get('/admin/services', [ServiceController::class, 'index'])->name('admin.services.index');
Route::post('/admin/services', [ServiceController::class, 'store'])->name('admin.services.store');
Route::get('/admin/services/{service}/edit', [ServiceController::class, 'edit'])->name('admin.services.edit');
Route::patch('/admin/services/{service}', [ServiceController::class, 'update'])->name('admin.services.update');
Route::delete('/admin/services/{service}', [ServiceController::class, 'destroy'])->name('admin.services.destroy');

//Skills Routes//
Route::get('/admin/skills', [SkillController::class, 'index'])->name('admin.skills.index');
Route::post('/admin/skills', [SkillController::class, 'store'])->name('admin.skills.store');
Route::patch('/admin/skills/{skill}', [SkillController::class, 'update'])->name('admin.skills.update');
Route::delete('/admin/skills/{skill}', [SkillController::class, 'destroy'])->name('admin.skills.destroy');

//Education Routes//
Route::get('/admin/educations', [EducationController::class, 'index'])->name('admin.educations.index');
Route::post('/admin/educations', [EducationController::class, 'store'])->name('admin.educations.store');
Route::patch('/admin/educations/{education}', [EducationController::class, 'update'])->name('admin.educations.update');
Route::delete('/admin/educations/{education}', [EducationController::class, 'destroy'])->name('admin.educations.destroy');

//Experience Routes//
Route::get('/admin/experiences', [ExperienceController::class, 'index'])->name('admin.experiences.index');
Route::post('/admin/experiences', [ExperienceController::class, 'store'])->name('admin.experiences.store');
Route::patch('/admin/experiences/{experience}', [ExperienceController::class, 'update'])->name('admin.experiences.update');
Route::delete('/admin/experiences/{experience}', [ExperienceController::class, 'destroy'])->name('admin.experiences.destroy');

//Project Routes//
Route::get('/admin/projects', [ProjectController::class, 'index'])->name('admin.projects.index');
Route::get('/admin/projects/create', [ProjectController::class, 'create'])->name('admin.projects.create');
Route::post('/admin/projects', [ProjectController::class, 'store'])->name('admin.projects.store');
Route::get('/admin/projects/{project}/edit', [ProjectController::class, 'edit'])->name('admin.projects.edit');
Route::patch('/admin/projects/{project}', [ProjectController::class, 'update'])->name('admin.projects.update');
Route::delete('/admin/projects/{project}', [ProjectController::class, 'destroy'])->name('admin.projects.destroy');

//Testimonial Routes//
Route::get('/admin/testimonials', [TestimonialController::class, 'index'])->name('admin.testimonials.index');
Route::get('/admin/testimonials/create', [TestimonialController::class, 'create'])->name('admin.testimonials.create');
Route::post('/admin/testimonials', [TestimonialController::class, 'store'])->name('admin.testimonials.store');
Route::get('/admin/testimonials/{testimonial}/edit', [TestimonialController::class, 'edit'])->name('admin.testimonials.edit');
Route::patch('/admin/testimonials/{testimonial}', [TestimonialController::class, 'update'])->name('admin.testimonials.update');
Route::delete('/admin/testimonials/{testimonial}', [TestimonialController::class, 'destroy'])->name('admin.testimonials.destroy');

//Message Routes//
Route::get('/admin/messages', [MessageController::class, 'index'])->name('admin.messages.index');
Route::get('/admin/messages/{message}', [MessageController::class, 'edit'])->name('admin.messages.edit');
route::patch('/admin/messages/{message}', [MessageController::class, 'update_status'])->name('admin.messages.update_status');
Route::delete('/admin/messages/{message}', [MessageController::class, 'destroy'])->name('admin.messages.destroy');

//User Routes//
Route::get('/admin/users', [UserController::class, 'index'])->name('admin.users.index');


Route::get('/{any}', function () {
    return view('notFoundPage');
})->where('any', '.*');