<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminHomeController;
use App\Http\Controllers\AdminController;

// Route untuk halaman utama
Route::get('/', [HomeController::class, 'index']);

// Route untuk halaman admin utama (dashboard)
Route::get('/admin', [AdminHomeController::class, 'admin'])->name('admin.dashboard');
Route::get('/admin/profile', [AdminHomeController::class, 'profile'])->name('admin.profile');
Route::get('/admin/infographics', [AdminHomeController::class, 'infographics'])->name('admin.infographics');
Route::get('/admin/map', [AdminHomeController::class, 'map'])->name('admin.map');
