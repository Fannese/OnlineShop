<?php

use App\Http\Controllers\ElektronikController;
use App\Http\Controllers\Frontend\FrontendController;
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
Route::get('/', [FrontendController::class, 'index']);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/Geschirr-index', [GeschirrController::class, 'index'])->name('Geschirr-index');
Route::get('/Geschirr-create', [GeschirrController::class, 'create'])->name('Geschirr.create')->middleware('auth');
Route::post('/Geschirr-store', [GeschirrController::class, 'store'])->name('Geschirr-store');
Route::get('/Geschirr.show/{id}', [GeschirrController::class, 'show'])->name('Geschirr.show');
Route::get('/Geschirr/{id}', [GeschirrController::class, 'edit'])->name('Geschirr-edit')->middleware('auth');
Route::put('/Geschirr/{id}', [GeschirrController::class, 'update'])->name('Geschirr-update')->middleware('auth');
Route::delete('/Geschirr/{id}', [GeschirrController::class, 'destroy'])->name('Geschirr-loeschen')->middleware('auth');

Route::get('/Elektronik-Home', [ElektronikController::class, 'index'])->name('Elektronik-Home');
