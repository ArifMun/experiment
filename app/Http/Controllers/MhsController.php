<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class MhsController extends Controller
{
    //
    public function index()
    {
        $data = DB::table('mahasiswa')
            ->select('id', 'nim', 'nama', 'alamat')
            // ->limit(20)
            ->get();
        return view('mahasiswa_data', ['data' => $data]);
    }
}