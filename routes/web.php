<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AboutusController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ContactusController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\WandaController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/hello', function () {
// return 'Hello World';
// });

// Route::get('/',[WandaController::class,'index']);
// Route::post('/',function(){
//     return 'Hai morning!';
// });


//Jobsheet 2 Praktikum 1
Route::get('/',[HomeController::class,'index']);

Route::get('/about',[AboutController::class,'about']);

Route::get('/articles/{id}',[ArticleController::class,'articles']);

//prak 3
Route::prefix('product')->group(function(){
    Route::get('/',[CategoryController::class,"index"]);
    Route::get('/{id}',[CategoryController::class,"show"]);
});

Route::prefix('news')->group(function(){
    Route::get('/',[NewsController::class,"index"]);
    Route::get('/{id}',[NewsController::class,"show"]);
});

Route::prefix('program')->group(function(){
    Route::get('/',[ProgramController::class,"index"]);
    Route::get('/{id}',[ProgramController::class,"show"]);
});

Route::get('/about-us',[AboutusController::class,"index"]);

Route::resource('/contact-us', ContactusController::class)->only([
    'index', 'show'
   ]);
