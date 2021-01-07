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
Route::get('/photography', [App\Http\Controllers\PhotographyPageController::class, 'photographyInfo'])->name('photography');


//home page editor
Route::post('/form', [\App\Http\Controllers\HomePageController::class, 'updateOrCreate']);
//Route::post('/form', [\App\Http\Controllers\PhotographyPageController::class, 'updateOrCreate']);

Route::get('/form', [App\Http\Controllers\HomePageController::class, 'formInfo']);
//Route::get('/form', [App\Http\Controllers\PhotographyPageController::class, 'formInfo']);


//post create
Route::post('/post', [\App\Http\Controllers\PostController::class, 'updateOrCreatePost']);
Route::get('/post', [\App\Http\Controllers\PostController::class, 'postInfo']);

//post edit
Route::get('/postedit', [\App\Http\Controllers\PostController::class, 'postEdit']);

Route::get('/postedit', [\App\Http\Controllers\PostController::class, 'getPost']);

Route::delete('/{post_id}', [\App\Http\Controllers\PostController::class, 'deletePost'])->name('delete-post');


//single post page
Route::get('/{post_title}', [\App\Http\Controllers\PostController::class, 'singlePageContent'])->name('singlepage');

//create category
Route::get('/category-editor', [\App\Http\Controllers\CategoryController::class, 'updateOrCreateCategory']);
Route::get('/category-editor', [\App\Http\Controllers\CategoryController::class, 'index']);

//
Route::get('/elementen', function () {
    return view('elementen');
});


//contact form

Route::get('/about', function () {
    return view('about');
});


Route::get('/contact', 'App\Http\Controllers\ContactUsFormController@createForm');

Route::post('/contact', 'App\Http\Controllers\ContactUsFormController@contactUsForm')->name('contact.store');

Auth::routes();

//admin protection
Route::middleware('auth', 'admin')->group(function(){
    Route::get('/admin', 'App\Http\Controllers\AdminController@index');
});

