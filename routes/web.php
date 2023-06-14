<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [\App\Http\Controllers\ZohoController::class, 'index']);
Route::get('/accounts', \App\Http\Controllers\Account\IndexController::class)->name('account.index');
Route::get('/accounts/create', \App\Http\Controllers\Account\CreateController::class);
Route::post('/accounts', \App\Http\Controllers\Account\StoreController::class);
Route::get('/deals', \App\Http\Controllers\Deal\IndexController::class)->name('deal.index');
Route::get('/deals/create', \App\Http\Controllers\Deal\CreateController::class);
Route::post('/deals', \App\Http\Controllers\Deal\StoreController::class);
