<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Daring</title>
</head>
<style>
    body {
        margin: 60px;
    }

    a {
        text-decoration: none;
    }

    table {
        border: 1px solid silver;
    }

</style>

@if (session('berhasil'))
<div class="alert alert-success text-center col-md-4">
    {{ session('berhasil') }}
</div>
@endif

@if (session('notvaksin'))
<div class="alert alert-danger text-center col-md-4">
    {{ session('notvaksin') }}
</div>
@endif

@if (session('warning'))
<div class="alert alert-warning text-center col-md-4">
    {{ session('warning') }}
</div>
@endif


<form action="/tampil/data_tiket/cari" method="GET">
    <div class="search">
        <input type="text" name="cari">
        <input type="submit" value="CARI">
    </div>
</form><br>

<div class="btn"><a href="/tampil/pesan_tiket">Tambah Data Mahasiswa</a></div>

<body>
    <h1 class="text-center">Daftar User</h1>
    <table class="table table-striped">
        <tr>
            <th>No</th>
            <th>No Reservasi</th>
            <th>Nama</th>
            <th>Usia</th>
            <th>No Tempat Duduk</th>
            <th>create at</th>
            <th>vaksin</th>

        </tr>
        <?php $no = 1; ?>
        @foreach($tiket as $tikets)
        @php
        $color='#CCC';
        if($tikets->vaksin == 'belum' && $tikets->usia>=12){
        $color = '#ED1C24';
        }else if ($tikets->vaksin =='sudah' && $tikets->usia<12) { $color='#FFFF00' ; } else{ $color='  #1AC770' ; }
            @endphp <tr style="background-color: <?=$color?>">
            <td>{{$no++}}</td>
            <td>{{$tikets->no_reservasi}}</td>
            <td>{{$tikets->nama_lengkap}}</td>
            <td>{{$tikets->usia}}</td>
            <td>{{$tikets->no_tempat_duduk}}</td>
            <td>{{$tikets->create_at}}</td>
            <td>{{$tikets->vaksin}}</td>

            </tr>
            @endforeach

    </table>
    <br>
    Halaman : {{ $tiket->currentPage() }} <br>
    Jumlah Data : {{ $tiket->total() }} <br>
    Data Perhalaman : {{ $tiket->perPage() }} <br>

    {{ $tiket->links() }}

</body>

</html>
