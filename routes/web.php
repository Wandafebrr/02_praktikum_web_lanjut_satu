<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
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


