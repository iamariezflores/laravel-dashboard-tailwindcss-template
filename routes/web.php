<?php

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SettingsController;
use App\Http\Controllers\ShoppingController;
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
//     return view('layouts.dashboard');
// });

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/customer', [CustomerController::class, 'index'])->name('customers');
Route::get('/shopping', [ShoppingController::class, 'index'])->name('shopping');
Route::get('/settings', [SettingsController::class, 'index'])->name('settings');