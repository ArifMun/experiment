<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GuruController extends Controller
{

    public function formulir()
    {
        return view('guru/formulir');
    }
    public function formulir_proses(Request $request)
    {
        $nama = $request->input('nama');
        $alamat = $request->input('alamat');

        return "Nama : " . $nama . " ,Alamat : " . $alamat;
    }
}