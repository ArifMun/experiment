<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class MhsController extends Controller
{
    //
    public function index()
    {
        $data = DB::table('mahasiswa')
            ->select('id', 'nim', 'nama', 'alamat','usia','hobi')
            // ->limit(20)
            ->get();
        return view('mahasiswa_data', ['data' => $data]);
    }

    public function edit_data($id){
        $data = DB::table('mahasiswa')
        ->where('id', '=',$id)
        ->first();
        return view('ubah_data_mhs', ['ubah'=>$data]);
    }

    public function ubah_data_mahasiswa(Request $request)
    {
        date_default_timezone_set('Asia/jakarta');
        $validated = Validator::make(
            $request->all(),
            [
                'nim' => 'required',
                //unique:users agar email unik dicek melalui tabel users
                'nama' => 'required',
                'alamat' => 'required',
                'usia'=>'required',
                'hobi'=>'required',
                
                ]

            ,
            [
                'nim.required' => 'nim tidak boleh kosong',
                'nama.required' => "nama tidak boleh kosong",
                'alamat.required' => 'alamat sudah terdaftar',
                'usia.unique' => 'usia sudah terdaftar', //unique apabila email sudah digunakan 
                'hobi.unique' => 'hobi sudah terdaftar' //unique apabila email sudah digunakan 
            ]
        );

        if ($validated->fails()) {
            $input = $request->all();
            return back()
                ->withErrors($validated)
                ->withInput($input);
        } else {

            $id = $request->input('id');
            $nim = $request->input('nim');
            $name = $request->input('nama');
            $alamat = $request->input('alamat');
            $usia = $request->input('usia');
            $hobi = $request->input('hobi');

            DB::table('mahasiswa')
            ->where('id',$id)
            ->update([
                'nim' => $nim,
                'nama' => $name,
                'alamat' => $alamat,
                'usia' => $usia,
                'hobi' => $hobi,
                'updated_at' => date('Y-m-d H:i:s')
            ]);

            return redirect('/tabel_mahasiswa')->with('berhasil', 'Data Pengguna Berhasil Diubah');
        }
    }
}