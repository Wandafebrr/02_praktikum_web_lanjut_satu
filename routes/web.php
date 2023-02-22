<?php

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
Route::get('/',function(){
        echo"Selamat Datang";
    });

Route::get('/about',function(){
    echo"NIM  : 2141720001 <br>";
    echo"Nama : Wanda Febrina Cahya";
});

Route::get('/articles/{id}',function($id){
    echo"Halaman Artikel dengan ID : $id";
});


