<?php

use App\Http\Controllers\ElektronikController;
use App\Http\Controllers\GeschirrController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/Geschirr-index', [GeschirrController::class, 'index'])->name('Geschirr-index');
Route::get('/Geschirr-create', [GeschirrController::class, 'create'])->name('Geschirr.create');
Route::post('/Geschirr-store', [GeschirrController::class, 'store'])->name('Geschirr-store');
Route::get('/Geschirr-show', [GeschirrController::class, 'show'])->name('Geschirr-Home');
Route::get('/Elektronik-Home', [ElektronikController::class, 'index'])->name('Elektronik-Home');
