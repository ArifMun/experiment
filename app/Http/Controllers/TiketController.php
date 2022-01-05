<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
class TiketController extends Controller
{
    public function index(){
        $data = DB::table('tiket')
        // ->select('id','no_reservasi','nama_lengkap','usia','no_tempat_duduk','create_at')
        // ->get();
        ->paginate(10);

        return view('uas.tampil_data_tiket',['tiket'=>$data]);
    }
    
    public function cari(Request $request)
    {
        $cari = $request->cari;

        $data = DB::table('tiket')
        ->where('nama_lengkap','like',"%".$cari."%")
        ->orWhere('usia','like',"%".$cari."%")
        ->orWhere('no_tempat_duduk','like',"%".$cari."%")
        ->paginate();

        return view('uas.tampil_data_tiket',['tiket'=>$data]);
    }

    public function pesan_tiket(Request $request)
    {
        date_default_timezone_set('Asia/jakarta');
        $validated = Validator::make(
            $request->all(),
            [
                'no_reservasi' => 'required',
                'nama_lengkap' => 'required',
                'usia' => 'required',
                'no_tempat_duduk' => 'required',
                'vaksin' => 'required',
            ],
            [
                'no_reservasi.unique' => 'No reservasi sudah terdaftar',
                'nama_lengkap.required' => 'Nama tidak boleh kosong',
                'usia.required' => 'Usia tidak boleh kosong',
                'no_tempat_duduk.required' => 'Usia tidak boleh kosong',
                'vaksin.required' => 'Vaksin tidak boleh kosong',
                'no_reservasi.required' => 'No reservasi tidak boleh kosong',
            ]
        );

        if($validated->fails()){
            return back()
            ->withErrors($validated)
            ->withInput();
        }else{
            $no_reservasi = $request->input('no_reservasi');
            $nama_lengkap = $request->input('nama_lengkap');
            $usia = $request->input('usia');
            $no_tempat_duduk = $request->input('no_tempat_duduk');
            $vaksin = $request->input('vaksin');

            if($usia >= 12 && $vaksin == "belum"){
                DB::table('tiket')->insert([
                    'no_reservasi' => $no_reservasi,
                    'nama_lengkap' => $nama_lengkap,
                    'usia' => $usia,
                    'no_tempat_duduk' => $no_tempat_duduk,
                    'create_at' => date('Y-m-d H:i:s'),
                    'vaksin' => $vaksin
                ]);
                return redirect('/tampil/data_tiket')->with('notvaksin','Lakukan Vaksin Terlebih Dahulu');
            }else if($usia <12 ) {
                DB::table('tiket')->insert([
                    'no_reservasi' => $no_reservasi,
                    'nama_lengkap' => $nama_lengkap,
                    'usia' => $usia,
                    'no_tempat_duduk' => $no_tempat_duduk,
                    'create_at' => date('Y-m-d H:i:s'),
                    'vaksin' => $vaksin
                ]);
                return redirect('/tampil/data_tiket')->with('warning','Tidak Boleh Naik kereta Prameks');
            }else

            DB::table('tiket')->insert([
                'no_reservasi' => $no_reservasi,
                'nama_lengkap' => $nama_lengkap,
                'usia' => $usia,
                'no_tempat_duduk' => $no_tempat_duduk,
                'create_at' => date('Y-m-d H:i:s'),
                'vaksin' => $vaksin
            ]);

            return redirect('/tampil/data_tiket')->with('berhasil','Boleh Naik kereta Prameks');
        }

    }

    public function form_tiket()
    {
        return view('uas.form_pesan_tiket');
    }
}