<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminHomeController;
use App\Http\Controllers\ProfileController;

Route::get('/', [HomeController::class, 'index']);
Route::get('/admin', [AdminHomeController::class, 'admin'])->name('admin.home');
Route::get('/admin/profile', [AdminHomeController::class, 'profile'])->name('admin.profile');
Route::get('/admin/pengumuman', [AdminHomeController::class, 'pengumuman'])->name('admin.pengumuman');
Route::get('/admin/kegiatan', [AdminHomeController::class, 'kegiatan'])->name('admin.kegiatan');
Route::get('/admin/kontak', [AdminHomeController::class, 'kontak'])->name('admin.kontak');
Route::get('/admin/pengguna', [AdminHomeController::class, 'pengguna'])->name('admin.pengguna');
