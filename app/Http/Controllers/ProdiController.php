<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdiController extends Controller
{
    public function mi(){
        return view ('prodi.mi',['content' => 'Selamat Datang di Prodi MI (Manajemen Informatika). MI merupakan salah satu prodi 
        Diploma 3 yang terdapat pada kampus polinema, Jurusan Teknologi Informasi' ]);
    }
    public function ti(){
        return view ('prodi.ti',['pesan' => 'Selamat Datang di Prodi TI (Teknik Informatika). Teknik Informatika merupakan 
        salah satu prodi Diploma 4 yang terdapat pada kampus polinema, Jurusan Teknologi Informasi' ]);
    }
}
