<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Api\StudentController;
use App\Http\Controllers\Api\RombelController;
use App\Http\Controllers\Api\RayonController;
use App\Http\Controllers\Api\BatchController;
use App\Http\Controllers\Api\SimController;
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

    Route::resource('/murid',StudentController::class);
    Route::resource('/rombel',RombelController::class);
    Route::resource('/rayon',RayonController::class);
    Route::resource('/angkatan',BatchController::class);
    Route::resource('/sim',SimController::class);
    Route::post('/import/murid',[StudentController::class,'importExcel']);
    Route::post('/import/guru',[StudentController::class,'importExcel']);
});

Route::post('/register',[AuthController::class,'register']);
Route::post('/login',[AuthController::class,'login']);
Route::get('/sim/image/{nis}',[SimController::class,'getImage']);
