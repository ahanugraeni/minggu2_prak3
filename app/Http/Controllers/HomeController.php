<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{   
    public function home(){
        return view ('home', ['pesan' => "Selamat Datang di halaman home"]);
    }
}

