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
});
Route::get('/why-sinotrans',[FrontEndController::class,'why-sinotrans'])->name('why-sinotrans');
Route::prefix('services')->name('services.')->group(function () {
    Route::get('/',[ServicesController::class,'services'])->name('all');
});


