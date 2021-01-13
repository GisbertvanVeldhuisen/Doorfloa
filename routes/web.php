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
Route::get('/fotografie', [App\Http\Controllers\PhotographyPageController::class, 'PhotographyInfo'])->name('fotografie');
Route::get('/contact', [App\Http\Controllers\ContactPageController::class, 'ContactInfo'])->name('contact');
Route::get('/over', [App\Http\Controllers\AboutPageController::class, 'AboutInfo'])->name('over');
Route::get('/recepten', [App\Http\Controllers\RecipePageController::class, 'RecipeInfo'])->name('recepten');
Route::get('/dieren', [App\Http\Controllers\AnimalPageController::class, 'AnimalPageInfo'])->name('dieren');
Route::get('/mensen', [App\Http\Controllers\HumanPageController::class, 'HumanPageInfo'])->name('mensen');
Route::get('/landschap', [App\Http\Controllers\LandscapesPageController::class, 'LandscapePageInfo'])->name('landschap');


//Page editor
Route::post('/form', [\App\Http\Controllers\HomePageController::class, 'updateOrCreate'])->name('form');
Route::post('/form/fotografie', [\App\Http\Controllers\PhotographyPageController::class, 'updateOrCreate']);
Route::post('/form/contact', [\App\Http\Controllers\ContactPageController::class, 'updateOrCreate']);
Route::post('/form/over', [\App\Http\Controllers\AboutPageController::class, 'updateOrCreate']);
Route::post('/form/recepten', [\App\Http\Controllers\RecipePageController::class, 'updateOrCreate']);
Route::post('/form/dieren', [\App\Http\Controllers\AnimalPageController::class, 'updateOrCreate']);
Route::post('/form/mensen', [\App\Http\Controllers\HumanPageController::class, 'updateOrCreate']);
Route::post('/form/landschap', [\App\Http\Controllers\LandscapesPageController::class, 'updateOrCreate']);
Route::post('/form/general', [\App\Http\Controllers\GeneralFormController::class, 'updateOrCreate']);

//Form informatie
Route::get('/form', [App\Http\Controllers\HomePageController::class, 'formInfo']);
Route::get('/form/fotografie', [App\Http\Controllers\PhotographyPageController::class, 'formInfo']);
Route::get('/form/contact', [App\Http\Controllers\ContactPageController::class, 'formInfo']);
Route::get('/form/over', [App\Http\Controllers\AboutPageController::class, 'formInfo']);
Route::get('/form/recepten', [App\Http\Controllers\RecipePageController::class, 'formInfo']);
Route::get('/form/dieren', [App\Http\Controllers\AnimalPageController::class, 'formInfo']);
Route::get('/form/mensen', [App\Http\Controllers\HumanPageController::class, 'formInfo']);
Route::get('/form/landschap', [App\Http\Controllers\LandscapesPageController::class, 'formInfo']);


Route::get('/elementen', function () {
    return view('elementen');
});


Route::get('/form/general', function () {
    return view('form-general');
});

//Route::get('/contact', 'App\Http\Controllers\ContactUsFormController@createForm');

Route::post('/contact', 'App\Http\Controllers\ContactUsFormController@contactUsForm')->name('contact.store');

Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
