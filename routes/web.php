<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\DatabukuController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\RekruitmenController;
use App\Http\Controllers\RekrutmenController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\BlogPersonalController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MhsController;
use App\Http\Controllers\PulsaController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/masakan', function () {
    return view('menu-masakan');
});
Route::get('/tampil_mahasiswa', function () {
    return view('data-mahasiswa');
});
Route::get('/daftar-mahasiswa', [MahasiswaController::class, 'index']);
Route::get('/data-buku', [DatabukuController::class, 'index']);
Route::get('/form-isidata', [FormController::class, 'index']);
//data barang
Route::get('/daftar-barang', [BarangController::class, 'data']);
// //latian
Route::get('/guru/{nama}', [GuruController::class, 'index']);
Route::get('/formulir', [GuruController::class, 'formulir']);
Route::post('/formulir/proses', [GuruController::class, 'formulir_proses']);
//data makanan
Route::get('/formulir', [MenuController::class, 'formulir']);
Route::post('/formulir/proses', [MenuController::class, 'formulir_proses']);
Route::get('/pilihmenu', [MenuController::class, 'formulir_proses']);
//UTS 1
Route::get('/formulir', [RekrutmenController::class, 'formulir']);
Route::post('/formulir/proses', [RekrutmenController::class, 'formulir_proses']);
Route::get('/pilihmenu', [RekrutmenController::class, 'formulir_proses']);
//UTS 2
Route::get('/biodata_mhs', [RekrutmenController::class, 'biodata']);
//pertemuan 8
Route::get('/blog', [BlogController::class, 'home']);
Route::get('/blog/tentang', [BlogController::class, 'tentang']);
Route::get('/blog/kontak', [BlogController::class, 'kontak']);
//tugas 8
Route::get('/blog', [BlogPersonalController::class, 'home']);
Route::get('/blog/profil', [BlogPersonalController::class, 'profil']);
Route::get('/blog/diary', [BlogPersonalController::class, 'diary']);
//daring
Route::get('/users', [UserController::class, 'index']);
//validasi
Route::GET('/users/tambah_data', [UserController::class, 'tambah_data']); //menampilkan form input
Route::POST('/users/proses_tambah_data_pengguna', [UserController::class, 'proses_tambah_data']); //proses menyimpan data users
//menampilkan form ubah data user
Route::GET('users/ubah-data/{id}',[UserController::class,'edit_data']);
//proses ubah data user
Route::POST('users/ubah-data-pengguna',[UserController::class,'ubah_data']);
//teori tugas
Route::get('/tabel_mahasiswa', [MhsController::class, 'index']);

//pulsa
Route::GET('/form/isi_pulsa', [PulsaController::class, 'tambah_pulsa']);
Route::POST('/form/nota', [PulsaController::class, 'proses_tambah_pulsa']);
Route::GET('/form/nota/hasil', [PulsaController::class, 'index']);