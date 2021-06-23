<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontEndController;
use App\Http\Controllers\ServicesController;

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



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/',[FrontEndController::class,'index'])->name('index');
Route::prefix('company')->name('company.')->group(function () {
    Route::get('/about-us',[FrontEndController::class,'about'])->name('about-us');
    Route::get('/about-us',[FrontEndController::class,'about'])->name('about-us');
    Route::get('/why-sinotrans',[FrontEndController::class,'whySinotrans'])->name('why-sinotrans');
    Route::get('our-strength',[FrontEndController::class,'ourStrength'])->name('our.strength');
});


Route::get('/map',[FrontEndController::class,'mapPak'])->name('map');
Route::get('/contact-us',[FrontEndController::class,'contact'])->name('contact');

Route::prefix('services')->name('services.')->group(function () {
    Route::get('/',[ServicesController::class,'services'])->name('all');
    Route::get('/ocean-freigh-service',[ServicesController::class,'oceanFreigh'])->name('ocean.freigh');
    Route::get('/ship-agency-service',[ServicesController::class,'shipAgency'])->name('ship.agency');
    Route::get('/custom-clearance-service',[ServicesController::class,'customClearance'])->name('custom.clearance');
    Route::get('/road-transport-service',[ServicesController::class,'roadTransport'])->name('road.transport');
    Route::get('/warehouse-service',[ServicesController::class,'wareHouse'])->name('ware.house');
});


