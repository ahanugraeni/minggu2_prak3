<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function about() {
        return view('about' ,['pesan' => "Ini adalah halaman About Us"]);
    }
}
