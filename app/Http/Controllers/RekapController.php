<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RekapController extends Controller
{
    public function nomer_a()
    {
        $data = DB::table('rekap_nilai')
        ->select('nim')
        ->where('ipk','>',3)
        ->where('total_sks','>',100)
        ->where('semester','>',5)
        ->get();

        return $data;
    }

    public function nomer_b()
    {
        

        return $data = DB::table('rekap_nilai')
        ->select('nim')
        ->where('ipk','<',2.75)
        ->where('total_sks','>',100)
        ->where('semester','>',5)
        ->get();
    }
}