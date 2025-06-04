<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\language\LanguageController;
use App\Http\Controllers\pages\HomePage;
use App\Http\Controllers\pages\Page2;
use App\Http\Controllers\pages\MiscError;
use App\Http\Controllers\authentications\LoginBasic;
use App\Http\Controllers\authentications\RegisterBasic;
use App\Http\Controllers\DokterController;
use App\Http\Controllers\perawat\PerawatController;
use App\Http\Controllers\RegisPasien;

// Main Page Route
Route::get('/', [HomePage::class, 'index'])->name('pages-home');
Route::get('/page-2', [Page2::class, 'index'])->name('pages-page-2');


Route::get('/form-karyawan', [RegisPasien::class, 'index'])->name('regis-pasien');
Route::get('/form2-karyawan', [RegisPasien::class, 'form2'])->name('regis2-pasien');
Route::get('/persetujuan', [RegisPasien::class, 'persetujuan'])->name('persetujuan');

// Dokter
Route::get('form-dokter', [DokterController::class, 'create'])->name('form-dokter');

Route::get('/form-perawat', [PerawatController::class, 'form'])->name('isian-perawat');

// locale
Route::get('/lang/{locale}', [LanguageController::class, 'swap']);
Route::get('/pages/misc-error', [MiscError::class, 'index'])->name('pages-misc-error');

// authentication
Route::get('/auth/login-basic', [LoginBasic::class, 'index'])->name('auth-login-basic');
Route::get('/auth/register-basic', [RegisterBasic::class, 'index'])->name('auth-register-basic');
