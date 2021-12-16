<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MenuController extends Controller
{

    public function formulir()
    {
        $data_warkop = [
            ["makanan" => "Nasi & Ikan Nila Bakar", "minuman" => "Es Teh"],
            ["makanan" => "Nasi & Ikan Lele Bakar", "minuman" => "Es Jeruk"],
            ["makanan" => "Nasi & Ayam Goreng", "minuman" => "Jeruk Panas"],
            ["makanan" => "Nasi & Bebek Goreng", "minuman" => "Teh Panas"]
        ];
        return view('daftar-menu', ['menu' => $data_warkop]);
    }
    public function formulir_proses(Request $request)
    {
        $makanan = $request->input('makanan');
        $minuman = $request->input('minuman');

        return view('pilih', ['makanan' => $makanan, 'minuman' => $minuman]);
    }
}