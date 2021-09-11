<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SaranaController extends Controller
{
    public function kantor(){
        return "Ini adalah halaman sarana perkantoran";
    }
    public function laboratorium(){
        return "Ini adalah halaman sarana laboratorium";
    }
    public function kelas(){
        return "Ini adalah halaman sarana kelas";
    }
    public function lainnya(){
        return "Ini adalah halaman sarana lainnya";
    }
}
