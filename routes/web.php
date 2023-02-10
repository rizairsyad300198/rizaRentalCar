<?php

use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\BackendController;
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

// Route::get('/', function () {
//     // return view('welcome');
//     dd('anjing');
// });

Route::get('/', [LandingPageController::class, 'index']);

Route::post('/success', [LandingPageController::class, 'success']);


Route::prefix('/checkout')->group(function () {
    Route::get('/', [LandingPageController::class, 'checkout']);
    Route::post('/', [LandingPageController::class, 'checkoutPayment'])->name('bayar');
});


Route::get('/admin/login', [BackendController::class, 'index']);
Route::post('/admin/login', [BackendController::class, 'login'])->name('login');
