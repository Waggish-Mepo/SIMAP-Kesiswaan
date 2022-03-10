<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Api\BarangRaziaController;
use App\Http\Controllers\Api\BarangTemuanController;
use App\Http\Controllers\Api\SuratPeringatanController;
use App\Http\Controllers\Api\SuratPerjanjianController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::middleware('auth:sanctum')->group(function () {
    Route::get('auth/logout', [AuthController::class, 'logout']);

    Route::resource('/barang-temuan', BarangTemuanController::class);
    Route::resource('/barang-razia', BarangRaziaController::class);
    Route::resource('/surat-peringatan', SuratPeringatanController::class);
    Route::resource('/surat-perjanjian', SuratPerjanjianController::class);
});

Route::post('/register',[AuthController::class,'register']);
Route::post('/login',[AuthController::class,'login']);
