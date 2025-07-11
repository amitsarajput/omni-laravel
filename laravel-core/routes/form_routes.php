<?php
use App\Http\Controllers\FormsController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('/location/update',[FormsController::class, 'location_form'])->name('location.update');
Route::post('/bubble-state/update',[FormsController::class, 'lb_state_update'])->name('location.bubblestate.update');

Route::name('form.')->group(function () {  
    Route::post('contact/submit',[FormsController::class, 'form_contact'])->name('contact');
    Route::post('dealerlocator/submit',[FormsController::class, 'form_dealerlocator'])->name('dealerlocator');    
    Route::post('landing-red/submit',[FormsController::class, 'form_landing_red'])->name('landing-red');
});