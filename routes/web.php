<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RekapBarangController;
use App\Http\Controllers\RekapBarang\BarangRaziaController;
use App\Http\Controllers\RekapBarang\BarangTemuanController;
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
    return view('layout.app');
});

Route::get('/login', function(){
    return view('login');
});

Route::get('/dashboard', function(){
    return view('dashboard');
});

Route::prefix('/rekap-barang')->group(function(){
    Route::get('/razia', [BarangRaziaController::class, 'index'])->name('razia.index');
    Route::post('/razia', [BarangRaziaController::class, 'store'])->name('razia.store');
    Route::put('/razia/{id}', [BarangRaziaController::class, 'update'])->name('razia.update');
    Route::delete('/razia/{id}', [BarangRaziaController::class, 'destroy'])->name('razia.destroy');
    Route::put('/razia/{id}/kembali',[BarangRaziaController::class, 'kembali'])->name('razia.kembali');
    Route::put('/razia/{id}/razia',[BarangRaziaController::class, 'razia'])->name('razia.razia');
    Route::get('/razia/details/{nis}', [BarangRaziaController::class, 'getDetails'])->name('razia.getDetails');

    Route::get('/temuan', [BarangTemuanController::class, 'index'])->name('temuan.index');
    Route::post('/temuan', [BarangTemuanController::class, 'store'])->name('temuan.store');
    Route::put('/temuan/{id}', [BarangTemuanController::class, 'update'])->name('temuan.update');
    Route::delete('/temuan/{id}', [BarangTemuanController::class, 'destroy'])->name('temuan.destroy');
});

Route::get('/warning-letter', function(){
    return view('performance-report.warning-letter');
});

Route::get('/student-performance-report', function(){
    return view('performance-report.student-performance');
});

Route::get('/raport-characters', function(){
    return view('raport-characters.raport-characters');
});

Route::get('/rombel-month', function(){
    return view('performance-report.rombel-month');
});

Route::get('/performance-report', function(){
    return view('performance-report.performance-report');
});

Route::get('/rombel-month', function(){
    return view('performance-report.rombel-month');
});

Route::get('/sim/input-sim', function(){
    return view('sim.input-sim');
});

Route::get('/raport-karakter/input-raport', function(){
    return view('raport-karakter.input-raport');
});
