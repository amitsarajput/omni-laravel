<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::name('landingpages.')->middleware(['web'])->group(function(){
    Route::get('/who-we-are', function () {
        return view('Others/WhoWeAre');
    })->name('who-we-are');

});