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
//Route::get('/test', [\App\Http\Controllers\ZohoController::class, 'test']);
//Route::get('/login', [\App\Http\Controllers\Auth\OAuth2Controller::class, 'testRedirect'])->name('zoho.redirect');
//Route::get('/login', [\App\Http\Controllers\Auth\OAuth2Controller::class, 'testRedirect'])->name('zoho.redirect');
