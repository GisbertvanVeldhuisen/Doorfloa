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

Route::get('/', [App\Http\Controllers\HomePageController::class, 'Homeinfo'])->name('home');

//home page editor
Route::post('/form', [\App\Http\Controllers\HomePageController::class, 'updateOrCreate']);

Route::get('/form', [App\Http\Controllers\HomePageController::class, 'formInfo']);


Route::get('/elementen', function () {
    return view('elementen');
});

Route::get('/contact', 'App\Http\Controllers\ContactUsFormController@createForm');

Route::post('/contact', 'App\Http\Controllers\ContactUsFormController@contactUsForm')->name('contact.store');

Auth::routes();

Route::middleware('auth', 'admin')->group(function(){
    Route::get('/admin', 'App\Http\Controllers\AdminController@index');
});

