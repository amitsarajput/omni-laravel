<?php
use App\Http\Controllers\ClimateNewsController;
use App\Http\Controllers\GolfTournamentController;
use App\Http\Controllers\MotorsportController;
use App\Http\Controllers\StaticPagesController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;




//use App\Models\GolfTournament;
//use App\Http\Controllers\GolfTournamentController;
//use App\Http\Controllers\MotorsportController;
//use App\Http\Controllers\ClimateNewsController;
//use App\Http\Controllers\MediaController;

//use App\Http\Controllers\LocationController;
//use App\Http\Controllers\BrandController;

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


Route::prefix('{country:slug}')->where(['country'=>'[a-zA-Z]{2,4}'])->name('pages.')->group(function(){
	Route::get('/about-us', [StaticPagesController::class,'index'])->name('about-us');
	Route::get('/why-radar', [StaticPagesController::class,'index'])->name('why-radar');
	Route::get('/dealer-locator', [StaticPagesController::class,'index'])->name('dealer-locator');
	//Contact Page
	Route::get('/contact-us', [StaticPagesController::class, 'index'])->name('contact');
	Route::get('/radar/warranty', [StaticPagesController::class,'index'])->name('warranty-eu');
	Route::get('/premium-collection', [StaticPagesController::class,'index'])->name('premium-collection');
	Route::get('/ceo-message', [StaticPagesController::class,'index'])->name('ceo-message');
	Route::get('/rigorous-testing', [StaticPagesController::class,'index'])->name('testing');
	Route::get('/privacy-policy', [StaticPagesController::class,'index'])->name('privacy-policy');
	
	//About Pages
	// Route::name('about.')->group(function(){
	// 	Route::get('/who-we-are', [StaticPagesController::class,'index'])->name('who-we-are');//
	// 	Route::get('/mission-vision', [StaticPagesController::class,'index'])->name('mission-vision');
	// 	Route::get('/our-values', [StaticPagesController::class,'index'])->name('our-values');
	// 	Route::get('/ceo-messages', [StaticPagesController::class,'index'])->name('ceo-messages');
	// 	Route::get('/leadership', [StaticPagesController::class,'index'])->name('leadership');
	// 	Route::get('/awards', [StaticPagesController::class,'index'])->name('awards');
	// 	Route::get('/our-story', [StaticPagesController::class,'index'])->name('our-story');
	// });
	
	//Warranty Pages
	// Route::name('warranty.')->group(function(){
	// 	Route::get('radar-us/limited-warranty', [StaticPagesController::class,'index'])->name('radarus');
	// 	Route::get('/radar/limited-warranty', [StaticPagesController::class,'index'])->name('radar');
	// 	Route::get('/patriot-us/limited-warranty', [StaticPagesController::class,'index'])->name('patriotus');
	// 	Route::get('/patriot/limited-warranty', [StaticPagesController::class,'index'])->name('patriot');
	// 	Route::get('/american-tourer-us/limited-warranty', [StaticPagesController::class,'index'])->name('americantourerus');
	// 	Route::get('/american-tourer/limited-warranty', [StaticPagesController::class,'index'])->name('americantourer');
	// });
	//Program Pages
	// Route::name('dealerlocator.')->group(function(){
	// 	Route::get('/north-america-dealer-locator', [StaticPagesController::class, 'index'])->name('northamerica');
	// 	Route::get('/uk-europe-dealer-locator', [StaticPagesController::Class, 'index'])->name('uk');
	// });
	//Program Pages
	// Route::name('program.')->group(function(){
	// 	Route::get('/golf', [GolfTournamentController::class, 'index'])->name('golf');
	// 	Route::get('/motorsport', [MotorsportController::Class, 'index'])->name('motorsport');
	// });
	//Responsibility Pages
	// Route::name('responsibility.')->group(function(){
	// 	Route::get('/social-responsibility', [StaticPagesController::class, 'index'])->name('social');
	// 	Route::get('/environmental-responsibility', [StaticPagesController::class, 'index'])->name('environmental');
	// 	Route::get('/climate-change', [ClimateNewsController::class, 'index'])->name('climatechange');
	// });
	//MediaCenter Pages
	// Route::name('mediacentre.')->group(function(){
	// 	Route::get('/media-coverage', [MediaController::class, 'coverage'])->name('mediacoverage');
	// 	Route::get('/press-releases', [MediaController::class, 'press'])->name('pressreleases');
	// });
});

