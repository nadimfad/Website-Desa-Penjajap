<?php

use App\Http\Controllers\AdminController;
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
use App\Http\Controllers\Admin\JobController;
// use App\Http\Controllers\admin\AdminController;

Route::get('/', [HomeController::class, 'index']);

// Route untuk halaman admin utama (dashboard)
Route::get('/admin', [AdminController::class, 'index'])->name('admin.dashboard');
Route::get('/admin/profile', [AdminController::class, 'profile'])->name('admin.profile');
Route::get('/admin/infographics', [AdminController::class, 'infographics'])->name('admin.infographics');
Route::get('/admin/map', [AdminController::class, 'map'])->name('admin.map');

//Route Dashboard Employee dan Gallery
Route::prefix('admin')->name('admin.')->group(function () {
    // Dashboard Routes
    Route::get('/', [EmployeeController::class, 'index'])->name('dashboard');

    // Employee Routes
    Route::post('/employee/store', [EmployeeController::class, 'storeEmployee'])->name('employee.store');
    Route::get('/employee/edit/{employee}', [EmployeeController::class, 'editEmployee'])->name('employee.edit');
    Route::put('/employee/update/{employee}', [EmployeeController::class, 'updateEmployee'])->name('employee.update');
    Route::delete('/employee/destroy/{employee}', [EmployeeController::class, 'destroyEmployee'])->name('employee.destroy');

    // Gallery Routes
    Route::post('/gallery/store', [EmployeeController::class, 'storeGallery'])->name('galleries.store');
    Route::get('/gallery/edit/{gallery}', [EmployeeController::class, 'editGallery'])->name('galleries.edit');
    Route::put('/gallery/update/{gallery}', [EmployeeController::class, 'updateGallery'])->name('galleries.update');
    Route::delete('/gallery/destroy/{gallery}', [EmployeeController::class, 'destroyGallery'])->name('galleries.destroy');

    // Banner Routes
    Route::post('/banner/store', [EmployeeController::class, 'storebanner'])->name('banner.store');
    Route::get('/banner/edit/{banner}', [EmployeeController::class, 'editbanner'])->name('banner.edit');
    Route::put('/banner/update/{banner}', [EmployeeController::class, 'updatebanner'])->name('banner.update');
    Route::delete('/banner/destroy/{banner}', [EmployeeController::class, 'destroybanner'])->name('banner.destroy');

    // Sambutan Routes
    Route::post('/sambutan/store', [EmployeeController::class, 'storesambutan'])->name('sambutan.store');
    Route::get('/sambutan/edit/{sambutan}', [EmployeeController::class, 'editsambutan'])->name('sambutan.edit');
    Route::put('/sambutan/update/{sambutan}', [EmployeeController::class, 'updatesambutan'])->name('sambutan.update');
    Route::delete('/sambutan/destroy/{sambutan}', [EmployeeController::class, 'destroysambutan'])->name('sambutan.destroy');
});


// // Route untuk CRUD Profile
Route::prefix('admin')->name('admin.')->group(function () {
    // Route untuk halaman profile (index)
    Route::get('/profile', [ProfileController::class, 'index'])->name('profile');

    // Route untuk menyimpan data profile
    Route::post('/profile', [ProfileController::class, 'store'])->name('profile.store');

    // Route untuk memperbarui data profile
    Route::put('/profile/{id}', [ProfileController::class, 'update'])->name('profile.update');

    //Route untuk memperbarui Misi
    Route::get('profile', [ProfileController::class, 'index'])->name('profile');
    Route::post('profile/mission', [ProfileController::class, 'storeMission'])->name('profile.mission.store');
    Route::put('profile/mission/{id}', [ProfileController::class, 'updateMission'])->name('profile.mission.update');
});

// // Route untuk CRUD Infografis
// Route::get('/admin/infographics',[InfographicController::class,'index'])->name('admin.infographics');
Route::prefix('admin')->name('admin.')->group(function () {
    // Route::resource('infographics', InfographicController::class);
    Route::get('infographics', [InfographicController::class, 'index'])->name('infographics');
    Route::post('infographics', [InfographicController::class, 'store'])->name('infographics.store');
    Route::put('infographics/{infographic}', [InfographicController::class, 'update'])->name('infographics.update');

    //Route job di Infographics
    Route::post('infographics/jobs', [InfographicController::class, 'storeJob'])->name('infographics.storeJob');
    Route::put('infographics/jobs/{id}', [InfographicController::class, 'updateJob'])->name('infographics.updateJob');
    Route::delete('infographics/jobs/{id}', [InfographicController::class, 'destroyJob'])->name('infographics.destroyJob');
});

//Route untuk CRUD Job(Pekerjaan)
// Route::prefix('admin')->name('admin.')->group(function () {
//     Route::get('jobs', [JobController::class, 'index'])->name('jobs.index');
//     Route::post('jobs', [JobController::class, 'store'])->name('jobs.store');
//     Route::put('jobs/{id}', [JobController::class, 'update'])->name('jobs.update');
//     Route::delete('jobs/{id}', [JobController::class, 'destroy'])->name('jobs.destroy');
// });



// // Route untuk CRUD banner di dashboard
// Route::prefix('admin')->name('admin.')->group(function () {
//     Route::resource('banner', BannerController::class);
// });
// Route::prefix('admin')->name('admin.')->group(function () {
//     Route::resource('banner', BannerController::class);
// });
// // // Route untuk CRUD Gallery Desa
// Route::prefix('admin')->name('admin.')->group(function () {
//     Route::resource('village-gallery', VillageGalleryController::class);
// });


// Route::get('/admin', [AdminHomeController::class, 'admin'])->name('admin.home');
// Route::get('/admin/profile', [AdminHomeController::class, 'profile'])->name('admin.profile');
// Route::get('/admin/pengumuman', [AdminHomeController::class, 'pengumuman'])->name('admin.pengumuman');
// Route::get('/admin/kegiatan', [AdminHomeController::class, 'kegiatan'])->name('admin.kegiatan');
// Route::get('/admin/kontak', [AdminHomeController::class, 'kontak'])->name('admin.kontak');
// Route::get('/admin/pengguna', [AdminHomeController::class, 'pengguna'])->name('admin.pengguna');

