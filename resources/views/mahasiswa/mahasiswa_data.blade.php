<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ url('css/bootstrap.min.css') }}">
    <title>Document</title>
</head>
<style>
    body {
        margin: 20px;
    }

    table,
    tr,
    th,
    td {
        border: 1px solid silver;
    }

</style>

@if (session('berhasil'))
<div class="alert alert-success text-center col-md-4">
    {{ session('berhasil') }}
</div>
@endif

<div class="container">
    <a href="tabel_mahasiswa/tambah" class="btn btn-primary">TAMBAH DATA</a><br>
</div>

<body>
    <table class="table table-striped">
        <tr>
            <th>No</th>
            <th>NIM</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>usia</th>
            <th>hobi</th>
            <th>Dibuat</th>
            <th>Diubah</th>
            <th>Option</th>
        </tr>
        @foreach($data as $mhs)
        <tr>
            <td>{{$mhs->id}}</td>
            <td>{{$mhs->nim}}</td>
            <td>{{$mhs->nama}}</td>
            <td>{{$mhs->alamat}}</td>
            <td>{{$mhs->usia}}</td>
            <td>{{$mhs->hobi}}</td>
            <td>{{$mhs->created_at}}</td>
            <td>{{$mhs->updated_at}}</td>
            <td colspan="2"><a href="tabel_mahasiswa/proses/{{ $mhs->id }}" class="btn btn-primary">UBAH</a> <a
                    href="tabel_mahasiswa/hapus-data/{{ $mhs->id }}" class="btn btn-danger"
                    onclick="return confirm('apakah anda yakin?')">hapus</a></td>
        </tr>
        @endforeach
    </table>
</body>

</html>
