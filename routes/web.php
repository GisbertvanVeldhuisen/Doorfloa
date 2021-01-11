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

//Pages
Route::get('/', [App\Http\Controllers\HomePageController::class, 'Homeinfo'])->name('home');
Route::get('/photography', [App\Http\Controllers\PhotographyPageController::class, 'PhotographyInfo'])->name('photography');
Route::get('/contact', [App\Http\Controllers\ContactPageController::class, 'ContactInfo'])->name('contact');
Route::get('/about', [App\Http\Controllers\AboutPageController::class, 'AboutInfo'])->name('about');
Route::get('/recipe', [App\Http\Controllers\RecipePageController::class, 'RecipeInfo'])->name('recipe');


//Page editor
Route::post('/form', [\App\Http\Controllers\HomePageController::class, 'updateOrCreate'])->name('form');
Route::post('/form/photography', [\App\Http\Controllers\PhotographyPageController::class, 'updateOrCreate']);
Route::post('/form/contact', [\App\Http\Controllers\ContactPageController::class, 'updateOrCreate']);
Route::post('/form/about', [\App\Http\Controllers\AboutPageController::class, 'updateOrCreate']);
Route::post('/form/recipe', [\App\Http\Controllers\RecipePageController::class, 'updateOrCreate']);

//Form informatie
Route::get('/form', [App\Http\Controllers\HomePageController::class, 'formInfo']);
Route::get('/form/photography', [App\Http\Controllers\PhotographyPageController::class, 'formInfo']);
Route::get('/form/contact', [App\Http\Controllers\ContactPageController::class, 'formInfo']);
Route::get('/form/about', [App\Http\Controllers\AboutPageController::class, 'formInfo']);
Route::get('/form/recipe', [App\Http\Controllers\RecipePageController::class, 'formInfo']);


Route::get('/elementen', function () {
    return view('elementen');
});

//Route::get('/contact', 'App\Http\Controllers\ContactUsFormController@createForm');

Route::post('/contact', 'App\Http\Controllers\ContactUsFormController@contactUsForm')->name('contact.store');

Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
