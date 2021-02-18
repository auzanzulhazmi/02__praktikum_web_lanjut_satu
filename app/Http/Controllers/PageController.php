<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        return "Selamat Datang";
    }
    public function about(){
        return "Nama : Auzan Ihtifazhuddin- NIM : 1941720110";
    }
    public function artikel($id){
        return "Halaman Artikel" .$id;
    }
}
