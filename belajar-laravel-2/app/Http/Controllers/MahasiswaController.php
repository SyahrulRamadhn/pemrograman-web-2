<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
        /**
    * Function untuk menampilkan form input data mahasiswa
    */
    public function formInput()
    {
    return view('mahasiswa.input');
    }

        /**
    * Function untuk menampilkan form input data mahasiswa
    */
    public function tabelData()
    {
    return view('mahasiswa.lihat');
    }
}
