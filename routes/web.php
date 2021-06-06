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
Route::get('non-resident-services',[\App\Http\Controllers\Frontend\HomeController::class,'nonResidentServices'])->name('non.resident.services');
Route::get('wills-probate',[\App\Http\Controllers\Frontend\HomeController::class,'willsProbate'])->name('wills.probate');
Route::get('power-of-attorney',[\App\Http\Controllers\Frontend\HomeController::class,'powerOfAttorney'])->name('power.of.attorney');
Route::get('energy-performance-certificate',[\App\Http\Controllers\Frontend\HomeController::class,'energyPerformanceCertificate'])->name('energy.performance.certificate');
Route::get('cedular-de-habitabilidad',[\App\Http\Controllers\Frontend\HomeController::class,'cedularDeHabitabilidad'])->name('cedular.de.habitabilidad');
Route::get('insurance-services',[\App\Http\Controllers\Frontend\HomeController::class,'insuranceServices'])->name('insurance.services');
Route::get('green-energy',[\App\Http\Controllers\Frontend\HomeController::class,'greenEnergy'])->name('green.energy');
Route::get('administracion-de-fincas',[\App\Http\Controllers\Frontend\HomeController::class,'administracionDeFincas'])->name('administracion.de.fincas');
Route::get('our-fees',[\App\Http\Controllers\Frontend\HomeController::class,'ourFees'])->name('our.fees');
Route::get('accounts-bookkeeping',[\App\Http\Controllers\Frontend\HomeController::class,'accountsBookkeeping'])->name('accounts.bookkeeping');
Route::get('taxation-matters',[\App\Http\Controllers\Frontend\HomeController::class,'taxationMatters'])->name('taxation.matters');
Route::get('meet-our-team',[\App\Http\Controllers\Frontend\HomeController::class,'meetOurTeam'])->name('meet.our.team');
Route::get('career-with-key-consultants',[\App\Http\Controllers\Frontend\HomeController::class,'careerWithKeyConsultants'])->name('career.with.key.consultants');
Route::get('privacy-cookie-policy',[\App\Http\Controllers\Frontend\HomeController::class,'privacyCookiePolicy'])->name('privacy.cookie.policy');
Route::get('about-us',[\App\Http\Controllers\Frontend\HomeController::class,'aboutUs'])->name('about.us');
Route::get('properties',[\App\Http\Controllers\Frontend\HomeController::class,'properties'])->name('properties');
Route::get('contact',[\App\Http\Controllers\Frontend\HomeController::class,'contact'])->name('contact');

