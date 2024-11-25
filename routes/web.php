<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

use App\Http\Controllers\ProfilDesaController;
use App\Http\Controllers\PetaDesaController;

Route::view('/', 'home');
Route::view('/profil-desa', 'profil-desa');
Route::view( '/infografis', 'infografis');
Route::view( '/peta-desa', 'peta-desa');

use App\Http\Controllers\AdminHomeController;
use App\Http\Controllers\AdminProfileController;
use App\Http\Controllers\Admin\InfographicController;
use App\Http\Controllers\Admin\BannerController;
use App\Http\Controllers\Admin\EmployeeController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\AdminController;

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

// Route untuk CRUD Infografis
Route::get('/admin/infographic',[InfographicController::class,'index'])->name('admin.infographic');
Route::post('/admin/infographic', [InfographicController::class, 'store'])->name('admin.infographic.store');
Route::put('/admin/infographic/{infographic}', [InfographicController::class, 'update'])->name('admin.infographic.update');

// Route untuk CRUD banner di dashboard
Route::prefix('admin')->name('admin.')->group(function () {
    Route::resource('banner', BannerController::class);
});

// // Route untuk CRUD Gallery Desa
// Route::prefix('admin')->name('admin.')->group(function () {
//     Route::resource('village-gallery', VillageGalleryController::class);
// });


Route::get('/admin', [AdminHomeController::class, 'admin'])->name('admin.home');
Route::get('/admin/profile', [AdminHomeController::class, 'profile'])->name('admin.profile');
Route::get('/admin/pengumuman', [AdminHomeController::class, 'pengumuman'])->name('admin.pengumuman');
Route::get('/admin/kegiatan', [AdminHomeController::class, 'kegiatan'])->name('admin.kegiatan');
Route::get('/admin/kontak', [AdminHomeController::class, 'kontak'])->name('admin.kontak');
Route::get('/admin/pengguna', [AdminHomeController::class, 'pengguna'])->name('admin.pengguna');

