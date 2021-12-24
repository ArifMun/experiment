<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class MhsController extends Controller
{
    //
    public function index()
    {
        // $data = DB::table('mahasiswa')
        //     ->select('id', 'nim', 'nama', 'alamat','usia','hobi','created_at','updated_at')
        //     ->get();
        $data=Mahasiswa::all();
        return view('mahasiswa.mahasiswa_data', ['data' => $data]);
    }

    public function edit_data($id){
        // $data = DB::table('mahasiswa')
        // ->where('id', '=',$id)
        // ->first();
        $data = Mahasiswa::find($id);
        return view('mahasiswa.ubah_data_mhs', ['mhs'=>$data]);
    }

    public function ubah_data_mahasiswa(Request $request)
    {
        date_default_timezone_set('Asia/jakarta');
        $validated = Validator::make(
            $request->all(),
            [
                'nim' => 'required|unique:mahasiswas',
                //unique:users agar email unik dicek melalui tabel users
                'nama' => 'required',
                'alamat' => 'required',
                'usia'=>'required',
                'hobi'=>'required',
                ],
            [
                'nim.unique' => 'nim sudah terdaftar',
                'nama.required' => 'nama tidak boleh kosong',
                'alamat.required' => 'alamat sudah terdaftar',
                'usia.required' => 'usia sudah terdaftar', //required apabila usia sudah digunakan 
                'hobi.required' => 'hobi sudah terdaftar' //required apabila  sudah digunakan 
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

            // DB::table('mahasiswa')
            // ->where('id',$id)
            // ->update([
            //     'nim' => $nim,
            //     'nama' => $name,
            //     'alamat' => $alamat,
            //     'usia' => $usia,
            //     'hobi' => $hobi,
            //     'updated_at' => date('Y-m-d H:i:s')
            // ]);

            $data = Mahasiswa::find($id);
            $data->nim = $request->nim;
            $data->nama = $request->nama;
            $data->alamat = $request->alamat;
            $data->usia = $request->usia;
            $data->hobi = $request->hobi;
            // update_at jika menggunakan eloquent otomatis terisi
            // $data->updated_at = $request->date('Y-m-d H:i:s');
            $data->save();

            return redirect('/tabel_mahasiswa')->with('berhasil', 'Data Pengguna Berhasil Diubah');
        }
    }

    public function tambah_data_mahasiswa(Request $request)
    {
        date_default_timezone_set('Asia/jakarta');
        $validated = Validator::make(
            $request->all(),
            [
                'nim' => 'required|unique:mahasiswas',
                //unique:users agar email unik dicek melalui tabel users
                'nama' => 'required',
                'alamat' => 'required',
                'usia'=>'required',
                'hobi'=>'required',
                ],
            [
                'nim.unique' => 'nim sudah terdaftar',
                'nama.required' => 'nama tidak boleh kosong',
                'alamat.required' => 'alamat sudah terdaftar',
                'usia.required' => 'usia sudah terdaftar', //required apabila usia sudah digunakan 
                'hobi.required' => 'hobi sudah terdaftar' //required apabila  sudah digunakan 
            ]
        );

        if ($validated->fails()) {
            $input = $request->all();
            return back()
                ->withErrors($validated)
                ->withInput($input);
        } else {
            // $nim = $request->input('nim');
            // $name = $request->input('nama');
            // $alamat = $request->input('alamat');
            // $usia = $request->input('usia');
            // $hobi = $request->input('hobi');

            // DB::table('mahasiswa')
            // ->insert([
            //     'nim' => $nim,
            //     'nama' => $name,
            //     'alamat' => $alamat,
            //     'usia' => $usia,
            //     'hobi' => $hobi,
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s')
            // ]);

            Mahasiswa::create([
                'nim' => $request->nim,
                'nama' => $request->nama,
                'alamat' => $request->alamat,
                'usia' => $request->usia,
                'hobi' => $request->hobi
            ]);

            return redirect('/tabel_mahasiswa')->with('berhasil', 'Data Mahasiswa Berhasil Ditambah');
        }
    }

    public function form()
    {
        return view('mahasiswa.mahasiswa_form');
    }
    
    public function hapus_mhs($id)
    {
        // DB::table('mahasiswa')
        // ->where('id','=',$id)
        // ->delete();
        $data = Mahasiswa::find($id);
        $data->delete();
    return redirect('/tabel_mahasiswa')->with('berhasil','Data Mahasiswa Berhasil Dihapus');
    }
}