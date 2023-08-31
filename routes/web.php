<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ProjectController;
use App\Http\Controllers\Frontend\CategoryController as FrontendCategoryController;
use App\Http\Controllers\Frontend\ProjectController as FrontendProjectController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/projects', [FrontendProjectController::class, 'index'])->name('projects.index');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('projects/{project:slug}', [ProjectController::class, 'show']);

Route::middleware(['auth', 'admin'])->name('admin.')->prefix('admin')->group(function() {
  Route::get('/', [AdminController::class, 'index'])->name('index');
  Route::resource('/categories', CategoryController::class);
  Route::resource('/projects', ProjectController::class);
});

require __DIR__.'/auth.php';
