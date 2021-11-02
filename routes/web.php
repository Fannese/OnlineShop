<?php

use App\Http\Controllers\Admin\listController;
use App\Http\Controllers\CheckController;
use App\Http\Controllers\ElektronikController;
use App\Http\Controllers\Frontend\FrontendController;
use App\Http\Controllers\GeschirrController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OrderModelController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\WarenkropController;
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
//Warenkrop
Route::middleware(['auth'])->group(function () {
    Route::post('warenkrop-hinzufuegen', [WarenkropController::class, 'hinzufuegen']);
    Route::get('/warenkorp', [WarenkropController::class, 'show'])->name('waren');
    Route::delete('/loeschen/{id}', [WarenkropController::class, 'destroy'])->name('loeschen');
    Route::get('check', [CheckController::class, 'index'])->name('ueberpruefen');
    Route::post('/uebersicht', [CheckController::class, 'store'])->name('order');
    Route::post('payment', [CheckController::class, 'rezorpay']);
    Route::get('Bewertung', [CheckController::class, 'bewertung']);
    //Route::post('handle-payment', [PaymentController::class, 'handelpayment'])->name('handle');
});
Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/Geschirr-create', [GeschirrController::class, 'create'])->name('Geschirr.create');
    Route::get('/Geschirr/{id}', [GeschirrController::class, 'edit'])->name('Geschirr-edit');
    Route::put('/Geschirr/{id}', [GeschirrController::class, 'update'])->name('Geschirr-update');
    Route::delete('/Geschirr/{id}', [GeschirrController::class, 'destroy'])->name('Geschirr-loeschen');
    Route::get('/Bestellungen', [listController::class, 'index'])->name('Bestellungen.index');
    Route::get('/admin/view-orders/{id}', [listController::class, 'show']);
    Route::post('adminstore', [listController::class, 'store'])->name('admin.store');
    Route::get('/edit/{id}', [listController::class, 'edit']);
    Route::put('/update/{id}', [listController::class, 'update']);
    Route::get('users_list', [listController::class, 'user'])->name('user');
});
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/Geschirr-index', [GeschirrController::class, 'index'])->name('Geschirr-index');

Route::post('/Geschirr-store', [GeschirrController::class, 'store'])->name('Geschirr-store');
Route::get('/Geschirr.show/{id}', [GeschirrController::class, 'show'])->name('Geschirr.show');
Route::post('update-menge', [WarenkropController::class, 'update']);




Route::get('/Elektronik-Home', [ElektronikController::class, 'index'])->name('Elektronik-Home');
