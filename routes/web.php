<?php

use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\BackendController;
use App\Http\Controllers\DataBookingController;
use App\Http\Controllers\DataMobilController;
use App\Http\Controllers\DataPenyewaController;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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
Route::get('/', [LandingPageController::class, 'index']);

Route::get('/success', [LandingPageController::class, 'success']);


Route::prefix('/checkout')->group(function () {
    Route::get('/{id}', [LandingPageController::class, 'checkout']);
    Route::post('/payment', [DataBookingController::class, 'store'])->name('bayar');
});


Route::get('/admin/login', [BackendController::class, 'index']);
Route::post('/admin/login', [BackendController::class, 'login'])->name('login');

Route::group(['middleware' => 'auth'], function () {

    Route::prefix('/dashboard')->group( function () {
        Route::get('/', [BackendController::class, 'dashboard']);

        Route::prefix('data-mobil')->group(function () {
            Route::get('/', [DataMobilController::class, 'index']);
            Route::get('/tambah-data-mobil', [DataMobilController::class, 'create']);
            Route::post('/tambah-data-mobil', [DataMobilController::class, 'store']);
            Route::get('/edit-data-mobil/{id}', [DataMobilController::class, 'edit']);
            Route::post('/edit-data-mobil/{id}', [DataMobilController::class, 'update']);
            Route::post('/delete-data-mobil/{id}', [DataMobilController::class, 'destroy']);
        });

        Route::prefix('data-penyewa')->group(function () {
            Route::get('/', [DataPenyewaController::class, 'index']);
            Route::get('/tambah-data-penyewa', [DataPenyewaController::class, 'create']);
            Route::post('/tambah-data-penyewa', [DataPenyewaController::class, 'store']);
            Route::get('/edit-data-penyewa/{id}', [DataPenyewaController::class, 'edit']);
            Route::post('/edit-data-penyewa/{id}', [DataPenyewaController::class, 'update']);
            Route::post('/delete-data-penyewa/{id}', [DataPenyewaController::class, 'destroy']);
        });


    });



});

