<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use Spatie\Honeypot\ProtectAgainstSpam;

/*Route::get('/', function () {
    return view('welcome');
});*/


Route::get('/', [HomeController::class, 'index'])->name('index');
Route::get('/about', [HomeController::class, 'about'])->name('about');;
Route::get('/iso', [HomeController::class, 'iso']);
Route::get('/services', [HomeController::class, 'services'])->name('services');
Route::get('/trainingprograms', [HomeController::class, 'trainingprograms'])->name('trainingprograms');
Route::get('/faq', [HomeController::class, 'faq'])->name('faq');

Route::middleware(ProtectAgainstSpam::class)->group(function () {
    Route::get('/quote', [HomeController::class, 'quote'])->name('quote');
    Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
});

Route::prefix('products')->group(function () {
    Route::get('/', [HomeController::class, 'products'])->name('products');
    Route::get('/{categorySlug}', [HomeController::class, 'showProductCategory'])->name('category-page');
    
    //$item_category = DB::table('categories')->get();
    foreach(DB::table('categories')->get() as $key => $category){
        Route::get('/'.$category->slug.'/{subCategorySlug}', [HomeController::class, 'showSubProductCategory'])->name($category->slug);
    }
    
});

Route::post('/quoteForm', [HomeController::class, 'handleFormQuote'])->name('send-quote');
Route::post('/contactForm', [HomeController::class, 'handleFormContact'])->name('send-contact');


