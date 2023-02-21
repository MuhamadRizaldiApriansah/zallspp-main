<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\SppController;
use App\Http\Controllers\PembayaranController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('siswa', [SiswaController::class, 'index']);
Route::post('siswa/update/{id}', [SiswaController::class, 'update'])->name('siswa.update');
Route::post('siswa/tambah', [SiswaController::class, 'store'])->name('siswa.tambah');
Route::get('siswa/delete/{id}', [SiswaController::class, 'destroy'])->name('siswa.delete');

Route::get('kelas', [KelasController::class, 'index']);
Route::post('kelas/tambah', [KelasController::class, 'store'])->name('kelas.tambah');
Route::post('kelas/update/{id}', [KelasController::class, 'update'])->name('kelas.update');
Route::get('kelas/delete/{id}', [KelasController::class, 'destroy'])->name('kelas.delete');

Route::get('spp', [SppController::class, 'index']);
Route::post('spp/tambah', [SppController::class, 'store'])->name('spp.tambah');
Route::post('spp/update/{id}', [SppController::class, 'update'])->name('spp.update');
Route::get('spp/delete/{id}', [SppController::class, 'destroy'])->name('spp.delete');

Route::get('pembayaran', [PembayaranController::class, 'index']);
Route::post('pembayaran/tambah', [PembayaranController::class, 'store'])->name('pembayaran.tambah');
Route::post('pembayaran/update/{id}', [PembayaranController::class, 'update'])->name('pembayaran.update');
Route::get('pembayaran/delete/{id}', [PembayaranController::class, 'destroy'])->name('pembayaran.delete');
