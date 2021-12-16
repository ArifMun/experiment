<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RekrutmenController extends Controller
{
    public function formulir()
    {
        // $jk = ["lk" => "laki-laki", "p" => "perempuan"];
        return view('rekruitmen.reqruitmen_himatekno');
    }
    public function formulir_proses(Request $request)
    {
        $nomer = $request->input('nomer');
        $nama = $request->input('nama');
        $ttl = $request->input('ttl');
        $tanggal = $request->input('tanggal');
        $tahun = $request->input('tahun');
        $laki_laki = $request->input('laki-laki');
        $perempuan = $request->input('perempuan');
        $file = $request->input('file');
        $alamat = $request->input('alamat');

        if ($nomer == '' && $nama == '') {
            return view('failed');
        } else {

            return view('tampil_biodata', [
                'nomer' => $nomer, 'nama' => $nama,
                'ttl' => $ttl, 'tanggal' => $tanggal, 'tahun' => $tahun, 'laki_laki' => $laki_laki,
                'perempuan' => $perempuan, 'file' => $file, 'alamat' => $alamat
            ]);
        }
    }
    public function biodata()
    {
        $biodata = [
            ["nim" => 1709001, "nama" => "Dian", "tempat" => "Jakarta", "tgl_lahir" => "05 agustus 1995", "angkatan" => 2020],
            ["nim" => 1709002, "nama" => "Fera", "tempat" => "Bandung", "tgl_lahir" => "04 Juli 1997", "angkatan" => 2020]
        ];
        return view('rekruitmen.biodata_mhs', ['biodata' => $biodata]);
    }
}