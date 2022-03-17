<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RekapBarangController;
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

Route::get('/rekap-barang/razia', function(){
    return view('rekap-barang.razia.index');
});

Route::get('/rekap-barang/razia/edit', function(){
    return view('rekap-barang.modals.modal-razia.edit');
});

Route::get('/rekap-barang/temuan', function(){
    return view('rekap-barang.temuan.index');
});

Route::get('/rekap-barang/temuan/edit', function(){
    return view('rekap-barang.modals.modal-temuan.edit');
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
