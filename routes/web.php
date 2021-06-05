<?php

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

Route::get('/', [\App\Http\Controllers\Frontend\HomeController::class,'index'])->name('landing');
Route::get('property-sales',[\App\Http\Controllers\Frontend\HomeController::class,'propertySales'])->name('property.sales');
Route::get('conveyancing-assistance',[\App\Http\Controllers\Frontend\HomeController::class,'conveyancingAssistance'])->name('conveyancing.assistance');

