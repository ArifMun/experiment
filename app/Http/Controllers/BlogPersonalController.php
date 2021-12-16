<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogPersonalController extends Controller
{
    public function home()
    {
        return view('home');
    }
    public function diary()
    {
        return view('diary');
    }
    public function profil()
    {
        $biodata = [
            [
                'nim' => 192520030, 'nama' => 'Arif Muntaha',
                'kelas' => 'TI B', 'alamat' => 'Bedono Kluwung 
                RT/RW 02/05 Kec.Kemiri Kab.Purworejo',
                'no' => '08981872370', 'hobi' =>
                'bermain kotak-kotak', 'skill' => 'oprek hape',
                'impian' => 'menjadi programmer handal',
                'langkah' => 'keep coding anytime'
            ]
        ];
        return view('profil', ['biodata' => $biodata]);
    }
}