<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfilDesaController;
use App\Http\Controllers\PetaDesaController;

Route::view('/', 'home');
Route::view('/profil-desa', 'profil-desa');
Route::view( '/infografis', 'infografis');
Route::view( '/peta-desa', 'peta-desa');