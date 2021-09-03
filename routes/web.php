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
Route::get('non-resident-taxes',[\App\Http\Controllers\Frontend\HomeController::class,'nonResidentServices'])->name('non.resident.services');
Route::get('wills-probate',[\App\Http\Controllers\Frontend\HomeController::class,'willsProbate'])->name('wills.probate');
Route::get('power-of-attorney',[\App\Http\Controllers\Frontend\HomeController::class,'powerOfAttorney'])->name('power.of.attorney');
Route::get('energy-performance-certificate',[\App\Http\Controllers\Frontend\HomeController::class,'energyPerformanceCertificate'])->name('energy.performance.certificate');
Route::get('cedular-de-habitabilidad',[\App\Http\Controllers\Frontend\HomeController::class,'cedularDeHabitabilidad'])->name('cedular.de.habitabilidad');
Route::get('insurance-services',[\App\Http\Controllers\Frontend\HomeController::class,'insuranceServices'])->name('insurance.services');
Route::get('green-energy',[\App\Http\Controllers\Frontend\HomeController::class,'greenEnergy'])->name('green.energy');
Route::get('administracion-de-fincas',[\App\Http\Controllers\Frontend\HomeController::class,'administracionDeFincas'])->name('administracion.de.fincas');
Route::get('business-start-up',[\App\Http\Controllers\Frontend\HomeController::class,'ourFees'])->name('our.fees');
Route::get('accounts-bookkeeping',[\App\Http\Controllers\Frontend\HomeController::class,'accountsBookkeeping'])->name('accounts.bookkeeping');
Route::get('taxation-matters',[\App\Http\Controllers\Frontend\HomeController::class,'taxationMatters'])->name('taxation.matters');
Route::get('meet-our-team',[\App\Http\Controllers\Frontend\HomeController::class,'meetOurTeam'])->name('meet.our.team');
Route::get('career-with-key-consultants',[\App\Http\Controllers\Frontend\HomeController::class,'careerWithKeyConsultants'])->name('career.with.key.consultants');
Route::get('privacy-cookie-policy',[\App\Http\Controllers\Frontend\HomeController::class,'privacyCookiePolicy'])->name('privacy.cookie.policy');
Route::get('about-us',[\App\Http\Controllers\Frontend\HomeController::class,'aboutUs'])->name('about.us');
Route::get('properties',[\App\Http\Controllers\Frontend\HomeController::class,'properties'])->name('properties');
Route::get('properties/sale',[\App\Http\Controllers\Frontend\HomeController::class,'sale'])->name('property.sale');
Route::get('properties/rent',[\App\Http\Controllers\Frontend\HomeController::class,'rent'])->name('property.rent');
Route::get('properties/{id}/{slug}',[\App\Http\Controllers\Frontend\HomeController::class,'propertiesDetails'])->name('properties.details');
Route::get('properties/{id}/{slug}/pdf',[\App\Http\Controllers\Frontend\HomeController::class,'propertiesDetailsPdf'])->name('properties.details.pdf');
Route::post('property-enquiry',[\App\Http\Controllers\Frontend\HomeController::class,'propertyEnquiry'])->name('property.enquiry');
Route::get('contact',[\App\Http\Controllers\Frontend\HomeController::class,'contact'])->name('contact');
Route::get('terms-and-conditions-of-business',[\App\Http\Controllers\Frontend\HomeController::class,'termsAndConditionsOfBusiness'])->name('terms.and.conditions.of.business');
Route::post('property-seeker', [\App\Http\Controllers\Frontend\HomeController::class, 'propertySeeker'])->name('property.seeker');
//User action
Route::post('contact',[\App\Http\Controllers\Frontend\HomeController::class,'contactForm'])->name('user.contact.form');
Route::post('favorite', [\App\Http\Controllers\Frontend\HomeController::class, 'favorite'])->name('favorite');
Route::get('spanish-will',[\App\Http\Controllers\Frontend\HomeController::class,'spanishWill'])->name('spanish.will');
Route::post('spanish-will-form',[\App\Http\Controllers\Frontend\HomeController::class,'willFormSubmit'])->name('will.form');


//Admin Route and Auth
Auth::routes(['register'=>false]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('admin')->middleware('auth')->group(function (){
    Route::get('dashboard',[\App\Http\Controllers\Backend\AdminController::class,'dashboard'])->name('admin.dashboard');

    Route::prefix('properties')->group(function (){
        Route::get('index',[\App\Http\Controllers\Backend\PropertyController::class,'index'])->name('admin.property.index');
        Route::get('create',[\App\Http\Controllers\Backend\PropertyController::class,'create'])->name('admin.property.create');
        Route::post('store',[\App\Http\Controllers\Backend\PropertyController::class,'store'])->name('admin.property.store');
        Route::get('edit/{id}/{slug}',[\App\Http\Controllers\Backend\PropertyController::class,'edit'])->name('admin.property.edit');
        Route::post('update/{id}/{slug}',[\App\Http\Controllers\Backend\PropertyController::class,'update'])->name('admin.property.update');
        Route::delete('delete',[\App\Http\Controllers\Backend\PropertyController::class,'delete'])->name('admin.property.delete');
        Route::get('note/{id}',[\App\Http\Controllers\Backend\PropertyController::class,'note'])->name('admin.property.note');
        Route::post('note-add',[\App\Http\Controllers\Backend\PropertyController::class,'addNote'])->name('admin.note.add');
        Route::get('note-delete/{id}',[\App\Http\Controllers\Backend\PropertyController::class,'deleteNote'])->name('admin.note.delete');
        Route::post('status-change',[\App\Http\Controllers\Backend\PropertyController::class,'statusChange'])->name('admin.property.status.change');
        Route::post('owner/store', [\App\Http\Controllers\Backend\PropertyController::class, 'ownerStore'])->name('owner.store');
        Route::get('owner/delete/{id}', [\App\Http\Controllers\Backend\PropertyController::class, 'ownerDelete'])->name('owner.delete');
        Route::get('property-seeker', [\App\Http\Controllers\Backend\AdminController::class, 'propertySeeker'])->name('admin.property.seeker');
        Route::get('seeker-note/{id}', [\App\Http\Controllers\Backend\AdminController::class, 'seekerNote'])->name('admin.seeker.note');
        Route::post('seeker-note/add', [\App\Http\Controllers\Backend\AdminController::class, 'seekerNoteAdd'])->name('admin.seeker.note.add');
        Route::get('seeker-note/delete/{id}', [\App\Http\Controllers\Backend\AdminController::class, 'seekerNoteDelete'])->name('admin.seeker.note.delete');
    });
    Route::get('contact/message',[\App\Http\Controllers\Backend\AdminController::class,'contactMessage'])->name('admin.contact.message');
    Route::get('contact/delete/{id}',[\App\Http\Controllers\Backend\AdminController::class,'contactDelete'])->name('admin.contact.delete');
    Route::get('enquiry',[\App\Http\Controllers\Backend\AdminController::class,'enquiry'])->name('admin.enquiry');
    Route::get('enquiry/delete/{id}',[\App\Http\Controllers\Backend\AdminController::class,'enquiryDelete'])->name('admin.enquiry.delete');
    Route::get('seo',[\App\Http\Controllers\Backend\AdminController::class,'seo'])->name('admin.seo');
    Route::post('seo/store',[\App\Http\Controllers\Backend\AdminController::class,'seoStore'])->name('seo.store');

});

//Ajax Route
Route::post('add-new-property-status',[\App\Http\Controllers\Backend\AjaxController::class,'addPropertyStatus'])->name('add.property.status');
Route::post('add-new-additionally',[\App\Http\Controllers\Backend\AjaxController::class,'additionally'])->name('add.property.additionally');
Route::post('add-new-reference-number',[\App\Http\Controllers\Backend\AjaxController::class,'referenceNumber'])->name('add.property.reference.number');
Route::post('add-new-property-type',[\App\Http\Controllers\Backend\AjaxController::class,'propertyType'])->name('add.property.type');
Route::post('add-new-property-feature',[\App\Http\Controllers\Backend\AjaxController::class,'propertyFeature'])->name('add.property.feature');
Route::post('more-media-upload',[\App\Http\Controllers\Backend\AjaxController::class,'moreMediaUpload'])->name('more.media.upload');
Route::get('get-media',[\App\Http\Controllers\Backend\AjaxController::class,'getMoreMedia'])->name('more.media.get');
Route::get('delete-more-media',[\App\Http\Controllers\Backend\AjaxController::class,'deleteMoreMedia'])->name('more.media.delete');
Route::get('seo-data/{id}',[\App\Http\Controllers\Backend\AjaxController::class,'seoData'])->name('seo.data');
Route::get('feature/change/{id}',[\App\Http\Controllers\Backend\AjaxController::class,'changeFeature'])->name('feature.change');
Route::get('command',function (){
    \Artisan::call('storage:link');
});

//Ajax Route
Route::get('get-district/{name}',[\App\Http\Controllers\Backend\AjaxController::class,'getDistrict'])->name('get.district');
Route::get('get-city/{name}',[\App\Http\Controllers\Backend\AjaxController::class,'getCity'])->name('get.city');
Route::post('get-all',[\App\Http\Controllers\Backend\AjaxController::class,'getAll'])->name('get.all');
Route::get('data',function (){
    return \App\Models\Property::whereNotNull('district')->groupBy('district')->pluck('district');
});
