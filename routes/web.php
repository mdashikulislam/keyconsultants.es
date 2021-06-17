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
Route::get('properties/{id}/{slug}',[\App\Http\Controllers\Frontend\HomeController::class,'propertiesDetails'])->name('properties.details');
Route::post('property-enquiry',[\App\Http\Controllers\Frontend\HomeController::class,'propertyEnquiry'])->name('property.enquiry');
Route::get('contact',[\App\Http\Controllers\Frontend\HomeController::class,'contact'])->name('contact');
Route::get('terms-and-conditions-of-business',[\App\Http\Controllers\Frontend\HomeController::class,'termsAndConditionsOfBusiness'])->name('terms.and.conditions.of.business');

//User action
Route::post('contact',[\App\Http\Controllers\Frontend\HomeController::class,'contactForm'])->name('user.contact.form');




//Admin Route and Auth
Auth::routes(['register'=>false]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('admin')->middleware('auth')->group(function (){
    Route::get('dashboard',[\App\Http\Controllers\Backend\AdminController::class,'dashboard'])->name('admin.dashboard');

    Route::prefix('properties')->group(function (){
        Route::get('index',[\App\Http\Controllers\Backend\PropertyController::class,'index'])->name('admin.property.index');
        Route::get('create',[\App\Http\Controllers\Backend\PropertyController::class,'create'])->name('admin.property.create');
        Route::post('store',[\App\Http\Controllers\Backend\PropertyController::class,'store'])->name('admin.property.store');
        Route::delete('delete',[\App\Http\Controllers\Backend\PropertyController::class,'delete'])->name('admin.property.delete');
        Route::get('note/{id}',[\App\Http\Controllers\Backend\PropertyController::class,'note'])->name('admin.property.note');
        Route::post('note-add',[\App\Http\Controllers\Backend\PropertyController::class,'addNote'])->name('admin.note.add');
        Route::get('note-delete/{id}',[\App\Http\Controllers\Backend\PropertyController::class,'deleteNote'])->name('admin.note.delete');
    });
    Route::get('contact/message',[\App\Http\Controllers\Backend\AdminController::class,'contactMessage'])->name('admin.contact.message');
    Route::get('enquiry',[\App\Http\Controllers\Backend\AdminController::class,'enquiry'])->name('admin.enquiry');
});

//Ajax Route
Route::post('add-new-property-status',[\App\Http\Controllers\Backend\AjaxController::class,'addPropertyStatus'])->name('add.property.status');
Route::post('add-new-additionally',[\App\Http\Controllers\Backend\AjaxController::class,'additionally'])->name('add.property.additionally');
Route::post('add-new-reference-number',[\App\Http\Controllers\Backend\AjaxController::class,'referenceNumber'])->name('add.property.reference.number');
Route::post('add-new-property-type',[\App\Http\Controllers\Backend\AjaxController::class,'propertyType'])->name('add.property.type');
