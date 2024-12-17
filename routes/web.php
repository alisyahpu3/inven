<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\LokasiController;

use App\Http\Controllers\KategoriController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/app', function () {
    return view('layouts.app');
});
Route::get('/dashboard', function () {
    return view('dashboard');
});
Route::get('/', function () {
    return view('welcome');
});
// Rute untuk 'masuk' - bisa dikelompokkan
Route::prefix('masuk')->group(function () {
    Route::get('/index', function () {
        return view('masuk.index');
    });
    Route::get('/create', function () {
        return view('masuk.create');
    });
});

// Rute untuk 'keluar' - juga bisa dikelompokkan
Route::prefix('keluar')->group(function () {
    Route::get('/index', function () {
        return view('keluar.index');
    });
    Route::get('/create', function () {
        return view('keluar.create');
    });
});
// Rute untuk 'lokasi' - juga bisa dikelompokkan
Route::prefix('lokasi')->group(function () {
    Route::get('/index', function () {
        return view('lokasi.index');
    });
    Route::get('/create', function () {
        return view('lokasi.create');
    });
});
// Rute untuk 'kategori' - juga bisa dikelompokkan
Route::prefix('kategori')->group(function () {
    Route::get('/index', function () {
        return view('kategori.index');
    });
    Route::get('/create', function () {
        return view('kategori.create');
    });
});


Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/masuk/index', [BarangController::class, 'masuk'])->name('masuk.index');
Route::get('/keluar/index', [BarangController::class, 'keluar'])->name('keluar.index');

Route::get('/lokasi/index', [LokasiController::class, 'lokasi'])->name('lokasi.index');
Route::get('/kategori/index', [KategoriController::class, 'kategori'])->name('kategori.index');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
