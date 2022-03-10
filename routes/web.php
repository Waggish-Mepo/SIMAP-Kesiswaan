<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InputSIMController;

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

Route::get('/sim/input-sim', function(){
    return view('sim.input-sim');
});

Route::get('/raport-karakter/input-raport', function(){
    return view('raport-karakter.input-raport');
});
