<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RekapBarangController;
use App\Http\Controllers\Api\SimController;
use App\Http\Controllers\Api\StudentController;
use App\Http\Controllers\Api\TeacherController;
use App\Http\Controllers\Auth\AuthController;
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
    return redirect('/login');
});

Route::get('/login', function(){
    return view('login');
});

Route::post('/login/submit',[AuthController::class , 'login']);

Route::middleware('authguard')->group(function () {

    Route::get('/logout',[AuthController::class , 'logout']);

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

    Route::resource('/murid', StudentController::class);
    Route::resource('/guru', TeacherController::class);

    Route::get('/sim/input-sim', [SimController::class , 'index']);
    Route::post('/sim/submit', [SimController::class , 'store']);
    Route::delete('/sim/delete/{id}', [SimController::class , 'delete']);
    Route::patch('/sim/edit/{id}', [SimController::class , 'update']);

    Route::get('/raport-karakter/input-raport', function(){
        return view('raport-karakter.input-raport');
    });
});


