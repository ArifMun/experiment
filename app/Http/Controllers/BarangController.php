<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BarangController extends Controller
{
    public function data()
    {
        $judul = "Spesifikasi";
        $nama_barang = ['id' => "1", 'kode' => "A2", 'nama' => "hp", 'tanggal' => "21 oktober 2022"];
        return view('data-barang', ['judul' => $judul, 'nama' => $nama_barang]);
    }
}