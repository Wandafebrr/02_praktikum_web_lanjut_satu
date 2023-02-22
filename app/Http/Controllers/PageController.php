<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        return'Selamat Datang';
    }

    public function about(){
        echo"NIM  : 2141720001 <br>";
        echo"Nama : Wanda Febrina Cahya";
    }

    public function articles($id){
        echo"Halaman Artikel dengan ID : $id";
    }
}
