<?php

use App\Http\Controllers\Home;
use App\Http\Controllers\PesananController;
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

Route::get('/', [Home::class, 'index']);

Route::post('/sewa', [PesananController::class, 'store'])->name('store_pesanan');
Route::get('/sewa', [PesananController::class, 'index']);

Route::get('bayar', function () {
    return view('bayar');
})->name('bayar');
