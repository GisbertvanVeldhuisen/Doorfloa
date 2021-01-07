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

//pages
Route::get('/', [App\Http\Controllers\HomePageController::class, 'Homeinfo'])->name('home');
Route::get('/photography', [App\Http\Controllers\PhotographyPageController::class, 'PhotographyInfo'])->name('photography');
Route::get('/contact', [App\Http\Controllers\ContactPageController::class, 'ContactInfo'])->name('contact');


//page editor
Route::post('/form', [\App\Http\Controllers\HomePageController::class, 'updateOrCreate'])->name('form');
Route::post('/form/photography', [\App\Http\Controllers\PhotographyPageController::class, 'updateOrCreate']);
Route::post('/form/contact', [\App\Http\Controllers\ContactPageController::class, 'updateOrCreate']);

Route::get('/form', [App\Http\Controllers\HomePageController::class, 'formInfo']);
Route::get('/form/photography', [App\Http\Controllers\PhotographyPageController::class, 'formInfo']);
Route::get('/form/contact', [App\Http\Controllers\ContactPageController::class, 'formInfo']);



Route::get('/elementen', function () {
    return view('elementen');
});


Route::get('/form/about', function () {
    return view('form-about');
});

Route::get('/about', function () {
    return view('about');
});

//Route::get('/contact', 'App\Http\Controllers\ContactUsFormController@createForm');

Route::post('/contact', 'App\Http\Controllers\ContactUsFormController@contactUsForm')->name('contact.store');

Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
