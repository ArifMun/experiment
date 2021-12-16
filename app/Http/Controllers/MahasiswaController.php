<?php

namespace App\Http\Controllers;

class MahasiswaController extends Controller
{
    public function index()
    {
        return view('menu-masakan');
        // echo "Selamat Datang Mahasiswa";
    }
}