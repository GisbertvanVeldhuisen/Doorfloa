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
Route::get('/zoet', [App\Http\Controllers\SweetController::class, 'getPageInfo'])->name('Sweet');
Route::get('/hartig', [App\Http\Controllers\HartigController::class, 'getPageInfo'])->name('hartig');


//Page editor
Route::post('/form', [\App\Http\Controllers\HomePageController::class, 'updateOrCreate'])->name('form');
Route::post('/form/fotografie', [\App\Http\Controllers\PhotographyPageController::class, 'updateOrCreate']);
Route::post('/form/contact', [\App\Http\Controllers\ContactPageController::class, 'updateOrCreate']);
Route::post('/form/over', [\App\Http\Controllers\AboutPageController::class, 'updateOrCreate']);
Route::post('/form/recepten', [\App\Http\Controllers\RecipePageController::class, 'updateOrCreate']);
Route::post('/form/dieren', [\App\Http\Controllers\AnimalPageController::class, 'updateOrCreate']);
Route::post('/form/mensen', [\App\Http\Controllers\HumanPageController::class, 'updateOrCreate']);
Route::post('/form/landschap', [\App\Http\Controllers\LandscapesPageController::class, 'updateOrCreate']);
Route::post('/form/zoet', [\App\Http\Controllers\SweetController::class, 'updateOrCreate']);
Route::post('/form/hartig', [\App\Http\Controllers\HartigController::class, 'updateOrCreate']);
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
Route::get('/form/zoet', [App\Http\Controllers\SweetController::class, 'formInfo']);
Route::get('/form/hartig', [App\Http\Controllers\HartigController::class, 'formInfo']);

Route::put('/form/zoet', [App\Http\Controllers\SweetController::class, 'getSelect']);


//Route::get('/form/dieren', [App\Http\Controllers\AnimalPageController::class, 'formInfo']);


Route::delete('form/dieren/deleteimage', [App\Http\Controllers\AnimalPageController::class, 'DeleteImage'])->name('deleteimageanimals');
Route::delete('form/mensen/deleteimage', [App\Http\Controllers\HumanPageController::class, 'DeleteImage'])->name('deleteimagehumans');
Route::delete('form/landschap/deleteimage', [App\Http\Controllers\LandscapesPageController::class, 'DeleteImage'])->name('deleteimagelandscapes');



//Route::get('/form/landschap', [App\Http\Controllers\LandscapesPageController::class, 'formInfo']);


//elementen page
Route::get('/elementen', function () {
    return view('elementen');
});


Route::get('/form/general', function () {
    return view('form-general');
});

//get category info and make category
Route::get('/categorie', [\App\Http\Controllers\CategoryController::class, 'getCategories']);
Route::post('/categorie', [\App\Http\Controllers\CategoryController::class, 'updateOrCreateCategory']);

//edit category
Route::get('/bewerk-categorie/{id}', [\App\Http\Controllers\CategoryController::class, 'categoryInfo'])->name('category');
Route::post('/bewerk-categorie', [\App\Http\Controllers\CategoryController::class, 'editTheCategory'])->name('update-category');

//delete category
Route::get('/verwijder/{id}', [\App\Http\Controllers\CategoryController::class, 'deleteCategory']);

//post create
Route::get('/post', [\App\Http\Controllers\PostController::class, 'postInfo']);
Route::post('/post', [\App\Http\Controllers\PostController::class, 'updateOrCreatePost']);

//edit post
Route::get('/bewerk-post/{id}',  [\App\Http\Controllers\PostController::class, 'getPost'])->name('post');
Route::post('/bewerk-post',  [\App\Http\Controllers\PostController::class, 'postEdit'])->name('update-post');

//delete post
Route::get('/delete/{id}', [\App\Http\Controllers\PostController::class, 'deletePost']);

//contact page
//Route::get('/contact', 'App\Http\Controllers\ContactUsFormController@createForm');

Route::post('/contact', 'App\Http\Controllers\ContactUsFormController@contactUsForm')->name('contact.store');

\Illuminate\Support\Facades\Auth::routes();

//Route::middleware('admin')->group(function(){
////    Route::get('/admin', 'App\Http\Controllers\AdminController@index');
//});


//single page
Route::get('/{id}',  [\App\Http\Controllers\PostController::class, 'singlePageContent'])->name('singlepage');


