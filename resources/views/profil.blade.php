@extends('master')

@section('judul_halaman','Profil')

<style>
tr td {
    padding: 4px;
}

table {
    border-collapse: collapse;

}
</style>
@section('konten')
<table border="1">
    @foreach($biodata as $profil)
    <tr>
        <td>NIM</td>
        <td>:</td>
        <td>{{$profil['nim']}}</td>
    </tr>
    <tr>
        <td>Nama</td>
        <td>:</td>
        <td>{{$profil['nama']}}</td>
    </tr>
    <tr>
        <td>Kelas</td>
        <td>:</td>
        <td>{{$profil['kelas']}}</td>
    </tr>
    <tr>
        <td>Alamat</td>
        <td>:</td>
        <td>{{$profil['alamat']}}</td>
    </tr>
    <tr>
        <td>No Wa</td>
        <td>:</td>
        <td>{{$profil['no']}}</td>
    </tr>
    <tr>
        <td>Hobi</td>
        <td>:</td>
        <td>{{$profil['hobi']}} &hearts; </td>
    </tr>
    <tr>
        <td>Skill</td>
        <td>:</td>
        <td>{{$profil['skill']}}</td>
    </tr>
    <tr>
        <td>Impian</td>
        <td>:</td>
        <td>{{$profil['impian']}} &spadesuit;</td>
    </tr>
    <tr>
        <td>Langkah menuju sukses</td>
        <td>:</td>
        <td>{{$profil['langkah']}}</td>
    </tr>
    @endforeach
</table>
@endsection