<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LibraryController;
use App\Http\Controllers\EbookController;
use App\Http\Controllers\ExpertController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\CommissionsController;
use App\Http\Controllers\ConfigurationController;
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

Route::get('/', function () {
    return view('main');
})->name('home');

Route::resource('libraries', LibraryController::class);
Route::resource('ebooks', EbookController::class);
Route::resource('experts', ExpertController::class);
Route::resource('orders', OrderController::class);
Route::resource('commissions', CommissionsController::class);
Route::resource('configurations', ConfigurationController::class);