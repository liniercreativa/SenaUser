<?php

use Illuminate\Support\Facades\Route;

/* Route::get('/', function () {
    return view('welcome');
}); */


Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('index');
Route::get('/about-us', [App\Http\Controllers\HomeController::class, 'aboutus'])->name('aboutus');
Route::get('/capability', [App\Http\Controllers\HomeController::class, 'capability'])->name('capability');
Route::get('/contact-us', [App\Http\Controllers\HomeController::class, 'contactus'])->name('contactus');
Route::get('/experience', [App\Http\Controllers\HomeController::class, 'experience'])->name('experience');

Route::post('/bisnisstore', [App\Http\Controllers\HomeController::class, 'bisnisstore'])->name('bisnisstore');
Route::post('/umumstore', [App\Http\Controllers\HomeController::class, 'umumstore'])->name('umumstore');



/* Annual Report */
Route::get('/annualreport', [App\Http\Controllers\HomeController::class, 'annualreport'])->name('annualreport');
Route::post('/submitdownload', [App\Http\Controllers\HomeController::class, 'submitdownload'])->name('submitdownload');


Route::get('/news', [App\Http\Controllers\HomeController::class, 'news'])->name('news');
Route::get('/investor', [App\Http\Controllers\HomeController::class, 'investor'])->name('investor');
Route::get('/article', [App\Http\Controllers\HomeController::class, 'article'])->name('article');
Route::get('/detail/{slug}', [App\Http\Controllers\HomeController::class, 'detail'])->name('detail');

Route::get('/mediainvestor', [App\Http\Controllers\HomeController::class, 'mediainvestor'])->name('mediainvestor');








Route::prefix('demo')->middleware('guest')->group(function () {
    Route::get('/', [App\Http\Controllers\DemoController::class, 'index'])->name('demo.index');
    Route::get('/news', [App\Http\Controllers\DemoController::class, 'news'])->name('demo.news');
    Route::get('/singlenews', [App\Http\Controllers\DemoController::class, 'singlenews'])->name('demo.singlenews');


    Route::get('/aboutus', [App\Http\Controllers\DemoController::class, 'aboutus'])->name('demo.aboutus');
    Route::get('/services', [App\Http\Controllers\DemoController::class, 'services'])->name('demo.services');
    Route::get('/contact', [App\Http\Controllers\DemoController::class, 'contact'])->name('demo.contact');
    Route::get('/contactus', [App\Http\Controllers\DemoController::class, 'contactus'])->name('demo.contactus');
    Route::get('/report', [App\Http\Controllers\DemoController::class, 'report'])->name('demo.report');
    Route::get('/experience', [App\Http\Controllers\DemoController::class, 'experience'])->name('demo.experience');
});


Route::prefix('Home')->middleware('guest')->group(function () {
    Route::get('/slider_add', [App\Http\Controllers\HomeController::class, 'slider_add'])->name('home.slider_add');
});
