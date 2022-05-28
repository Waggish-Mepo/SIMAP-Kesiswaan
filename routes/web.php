<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\SimController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Api\StudentController;
use App\Http\Controllers\Api\TeacherController;
use App\Http\Controllers\RekapBarangController;
use App\Http\Controllers\RekapBarang\BarangRaziaController;
use App\Http\Controllers\RekapBarang\BarangTemuanController;
use App\Models\Teacher;
use App\Models\Student;
use App\Models\Sim;
use App\Models\Barang_Razia;
use App\Models\Barang_Temuan;
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
        $guru = Teacher::count();
        $razia = Barang_Razia::count();
        $temuan = Barang_Temuan::count();
        $sim = Sim::count();
        $murid = Student::count();
        return view('dashboard',compact(['guru','murid','sim','razia','temuan']));
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
        Route::put('/temuan/{id}/ambil', [BarangTemuanController::class, 'ambil'])->name('temuan.ambil');
    });

    Route::prefix('/kinerja')->group(function(){
        Route::get('/rekap-laporan-sp', function(){
            return view('performance-report.warning-letter');
        });
        Route::get('/rekap-reward', function(){
            return view('performance-report.student-performance');
        });
        Route::get('/laporan-kehadiraan', function(){
            return view('performance-report.rombel-month');
        });

        // Route::get('/performance-report', function(){
        //     return view('performance-report.performance-report');
        // });
    });


    Route::prefix('/sim')->group(function(){
        Route::get('/input-sim', [SimController::class , 'index']);
        Route::post('/submit', [SimController::class , 'store']);
        Route::delete('/delete/{id}', [SimController::class , 'delete']);
        Route::patch('/edit/{id}', [SimController::class , 'update']);
    });

    Route::resource('/murid', StudentController::class);
    Route::resource('/guru', TeacherController::class);

    Route::get('/raport-karakter/input-raport', function(){
        return view('raport-karakter.input-raport');
    });
});


