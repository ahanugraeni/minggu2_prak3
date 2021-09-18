<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SaranaController extends Controller
{
    public function perkantoran() {
        return view('Sarana.perkantoran');
    }

    public function laboratorium() {
        return view('Sarana.laboratorium');
    }

    public function kelas() {
        return view('Sarana.kelas');   
    }

    public function lainnya() {
        return view('Sarana.lainnya');
    }
}
