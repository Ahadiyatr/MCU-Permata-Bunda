<?php

use App\Http\Controllers\pages\Page2;
use App\Http\Controllers\RegisPasien;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LabController;
use App\Http\Controllers\pages\HomePage;
use App\Http\Controllers\UserController;
use App\Http\Controllers\pages\MiscError;
use App\Http\Controllers\DokterController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\KunjunganController;
use App\Http\Controllers\PerusahaanController;
use App\Http\Controllers\MedicalRecordController;
use App\Http\Controllers\perawat\PerawatController;
use App\Http\Controllers\authentications\LoginBasic;
use App\Http\Controllers\language\LanguageController;
use App\Http\Controllers\authentications\RegisterBasic;

// Main Page Route
Route::get('/', [HomePage::class, 'index'])->name('pages-home');
Route::get('/perusahaan-home', [HomePage::class, 'homePt'])->name('perusahan-home');

Route::get('/page-2', [Page2::class, 'index'])->name('pages-page-2');

// Pencarian
Route::get('/pencarian', [HomePage::class, 'pencarian'])->name('pencarian');



// Kunjungan
Route::get('/kunjungan', [KunjunganController::class, 'index'])->name('index');
// Medical Records
Route::get('/medical-records', [MedicalRecordController::class, 'index'])->name('index');
Route::get('/medical-records/create-record', [MedicalRecordController::class, 'create'])->name('create-record');

Route::get('/medical-records/details', [MedicalRecordController::class, 'show'])->name('show');
Route::get('/medical-records/details-riwayat', [MedicalRecordController::class, 'showriwayat'])->name('showriwayat');
Route::get('/medical-records/details-fisik', [MedicalRecordController::class, 'showfisik'])->name('showfisik');
Route::get('/medical-records/details-mcu', [MedicalRecordController::class, 'details'])->name('details');

// Pasien
Route::get('/regis-pasien', [RegisPasien::class, 'regispasien'])->name('regis-pasien');
Route::get('/regis1-pasien', [RegisPasien::class, 'register1'])->name('regis-pasien-multi-step');
Route::get('/form-karyawan', [RegisPasien::class, 'index'])->name('regis-pasien');
Route::get('/form2-karyawan', [RegisPasien::class, 'form2'])->name('regis2-pasien');
Route::get('/persetujuan', [RegisPasien::class, 'persetujuan'])->name('persetujuan');

// Dokter
Route::get('form-dokter', [DokterController::class, 'create'])->name('form-dokter');
// Lab
Route::get('form-lab', [LabController::class, 'create'])->name('form-lab');

Route::get('/form-perawat', [PerawatController::class, 'form'])->name('isian-perawat');

// Perusahaan
Route::get('/perusahaan', [PerusahaanController::class, 'index'])->name('perusahaan');
// User
Route::get('/user', [UserController::class, 'index'])->name('user');

// Laporan
Route::get('/laporan', [LaporanController::class, 'index'])->name('index');



// locale
Route::get('/lang/{locale}', [LanguageController::class, 'swap']);
Route::get('/pages/misc-error', [MiscError::class, 'index'])->name('pages-misc-error');

// authentication
Route::get('/auth/login-basic', [LoginBasic::class, 'index'])->name('auth-login-basic');
Route::get('/auth/register-basic', [RegisterBasic::class, 'index'])->name('auth-register-basic');
