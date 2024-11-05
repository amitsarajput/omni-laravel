<?php

use App\Http\Controllers\AjaxHandlerController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\BrandExtraDetailController;
use App\Http\Controllers\CountryController;
use App\Http\Controllers\IconController;
use App\Http\Controllers\RegionController;
use App\Http\Controllers\SearchTagController;
use App\Http\Controllers\SeasonController;
use App\Http\Controllers\TyreCategoryController;
use App\Http\Controllers\TyreController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;




/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware(['auth', 'verified'])->prefix('admin')->name('admin.')->group(function () {
    Route::resource('region', RegionController::class);
    Route::resource('country', CountryController::class);
    Route::resource('brand', BrandController::class);
    Route::resource('searchtag', SearchTagController::class);
    Route::resource('icon', IconController::class);
    Route::match(['GET','POST','PUT'], 'tyre-feature/{tyre}', [TyreController::class,'feature'])->name('tyre.feature');
    Route::match(['GET','POST','PUT'], 'tyre-size/{tyre}', [TyreController::class,'size'])->name('tyre.size');
    Route::match(['GET','POST','PUT'], 'tyre-clone/{tyre}', [TyreController::class,'clone'])->name('tyre.clone');
    Route::match(['GET','PUT'], 'tyre-publish/{tyre}', [TyreController::class,'publish'])->name('tyre.publish');
    Route::match(['GET','POST','PUT'], 'tyre-reorder/', [TyreController::class,'tyrereorder'])->name('tyre.reorder');
    Route::resource('tyre', TyreController::class);
    Route::resource('tyrecategory', TyreCategoryController::class);
    Route::resource('brandextradetail', BrandExtraDetailController::class);
    Route::resource('season', SeasonController::class);

    // Route::name('country.')->group(function () {
    //     Route::get('/country', [CountryController::class, 'index'])->name('all');
    //     Route::patch('/country', [CountryController::class, 'update'])->name('update');
    //     Route::delete('/country', [CountryController::class, 'destroy'])->name('destroy');
    // });
    Route::post('/ajax-request/{table}',[AjaxHandlerController::class, 'handle_request'])->name('ajax.request');
});