<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Admin\EmployeeController;
use App\Http\Controllers\Admin\ProfileController;

// Route untuk halaman utama
Route::get('/', [HomeController::class, 'index']);

// Route untuk halaman admin utama (dashboard)
Route::get('/admin', [AdminController::class, 'index'])->name('admin.dashboard');
Route::get('/admin/profile', [AdminController::class, 'profile'])->name('admin.profile');
Route::get('/admin/infographics', [AdminController::class, 'infographics'])->name('admin.infographics');
Route::get('/admin/map', [AdminController::class, 'map'])->name('admin.map');

//Route untuk CRUD Pejabat
Route::get('/admin', [EmployeeController::class, 'index'])->name('admin.dashboard');
Route::post('/admin/employees', [EmployeeController::class, 'store'])->name('admin.employees.store');
Route::put('/admin/employees/{employee}', [EmployeeController::class, 'update'])->name('admin.employees.update');
Route::delete('/admin/employees/{employee}', [EmployeeController::class, 'destroy'])->name('admin.employees.destroy');

// Route untuk CRUD Profile
Route::get('/admin/profile', [ProfileController::class, 'index'])->name('admin.profile');
Route::post('/admin/profile', [ProfileController::class, 'store'])->name('admin.profile.store');
Route::put('/admin/profile/{profile}', [ProfileController::class, 'update'])->name('admin.profile.update');