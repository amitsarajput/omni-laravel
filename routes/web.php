<?php

use App\Http\Controllers\AjaxHandlerController;
use App\Http\Controllers\FormsController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StaticPagesController;
use App\Http\Controllers\TyreController;
use App\Models\Brand;
use App\Models\Country;
use App\Models\Region;
use App\Models\SearchTag;
use Illuminate\Http\Request;
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
require __DIR__.'/staticpages.php';

Route::get('/', [TyreController::class, 'tyre_grid'])->name('home');

Route::get('/{brand:slug}-{country:slug}', [TyreController::class, 'tyre_grid'])
    ->where(['brand'=>'[a-z\-]+','country'=>'[a-z\-]+'])->name('tyre.grid');
Route::get('/{brand:slug}-{country:slug}/{tyre:slug}', [TyreController::class, 'tyre_single'])
    ->where(['brand'=>'[a-z\-]+','country'=>'[a-z\-]+'])->name('tyre.single');



Route::get('/dashboard', function () {
    return view('admin.index');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::post('/location/update',[FormsController::class, 'location_form'])->name('location.update');
Route::post('/bubble-state/update',[FormsController::class, 'lb_state_update'])->name('location.bubblestate.update');

require __DIR__.'/auth.php';
require __DIR__.'/admin.php';
