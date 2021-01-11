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
Route::post('/category', [\App\Http\Controllers\CategoryController::class, 'updateOrCreateCategory']);

//Form informatie
Route::get('/form', [App\Http\Controllers\HomePageController::class, 'formInfo']);
Route::get('/form/photography', [App\Http\Controllers\PhotographyPageController::class, 'formInfo']);
Route::get('/form/contact', [App\Http\Controllers\ContactPageController::class, 'formInfo']);
Route::get('/form/about', [App\Http\Controllers\AboutPageController::class, 'formInfo']);
Route::get('/form/recipe', [App\Http\Controllers\RecipePageController::class, 'formInfo']);

//elementen page
Route::get('/elementen', function () {
    return view('elementen');
});

//about page
Route::get('/about', function () {
    return view('about');
});

//category page
Route::get('/category', function () {
    return view('category');
});

//display categories underneath category maker
Route::get('/category', [\App\Http\Controllers\CategoryController::class, 'getCategoryInfo']);
Route::put('/category', [\App\Http\Controllers\CategoryController::class, 'getCategoryInfo2']);

//edit category
Route::put('/edit-category', [\App\Http\Controllers\CategoryController::class, 'categoryInfo'])->name('category');
Route::get('/edit-category/{id}', [\App\Http\Controllers\CategoryController::class, 'editTheCategory']);

//delete category
Route::get('/verwijder/{id}', [\App\Http\Controllers\CategoryController::class, 'deleteCategory']);

//post make
Route::get('/post', [\App\Http\Controllers\PostController::class, 'postInfo']);
Route::post('/post', [\App\Http\Controllers\PostController::class, 'updateOrCreatePost']);

//edit post
Route::get('/editpost',  [\App\Http\Controllers\PostController::class, 'getPost']);

//delete post
Route::get('/delete/{id}', [\App\Http\Controllers\PostController::class, 'deletePost']);

//contact page
Route::get('/contact', 'App\Http\Controllers\ContactUsFormController@createForm');

Route::post('/contact', 'App\Http\Controllers\ContactUsFormController@contactUsForm')->name('contact.store');

\Illuminate\Support\Facades\Auth::routes();

//Route::middleware('admin')->group(function(){
////    Route::get('/admin', 'App\Http\Controllers\AdminController@index');
//});

//single page
Route::get('/{id}',  [\App\Http\Controllers\PostController::class, 'singlePageContent'])->name('singlepage');


