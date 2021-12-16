<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class PulsaController extends Controller
{
    public function index()
    {
        $data = DB::table('pulsa')
            ->orderBy('created_at', 'desc')
            // ->select('nama_provider', 'no_hp', 'nominal_pulsa', 'saldo')
            // 'nama_provider', 'no_hp', 'nominal_pulsa', 'saldo'
            ->limit(1)
            ->first();
        // ->get();
        // print_r($data); cek data yang masuk
        // exit;
        return view('pulsa/nota', ['pulsa' => $data]);
    }

    public function tambah_pulsa()
    {
        $header = "ISI PULSA";
        return view('pulsa/form_isi_pulsa', ['header' => $header]);
    }

    public function proses_tambah_pulsa(Request $request)
    {
        date_default_timezone_set('Asia/Jakarta');
        $validated = Validator::make(
            $request->all(),
            [
                'nama_provider' => 'required',
                'no_hp' => 'required',
                'saldo' => 'required'
            ],
            [
                'nama_provider.required' => 'Nama Provider tidak boleh kosong',
                'no_hp.required' => 'No Hp tidak boleh kosong',
                'saldo.required' => 'saldo tidak boleh kosong'
            ]
        );

        if ($validated->fails()) {
            return redirect('form/isi_pulsa')
                ->withErrors($validated)
                ->withInput();
        } else {
            $nama_provider = $request->input('nama_provider');
            $no_hp = $request->input('no_hp');
            $nominal_pulsa = $request->input('nominal_pulsa');
            $saldo = $request->input('saldo');

            if ($saldo < $nominal_pulsa) {
                return ('saldo kurang');
            }

            DB::table('pulsa')->insert([
                'nama_provider' => $nama_provider,
                'no_hp' => $no_hp,
                'nominal_pulsa' => $nominal_pulsa,
                'saldo' => $saldo,
                'created_at' => date('Y-m-d H:i:s')
            ]);

            return redirect('/form/nota/hasil')->with('berhasil');
        }
    }
}