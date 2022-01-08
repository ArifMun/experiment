<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ url('css/bootstrap.min.css') }}" rel="stylesheet">
    <title>Daring</title>
</head>
<style>
    body {
        margin: 60px;
    }

    a {
        color: white;
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



<div class="container">
    <div class="row justify-content-between">

        <div class="col-4">
            <form action="/tampil/data_tiket/cari" method="GET">
                <input type="text" class="form-control" name="cari" placeholder="Cari Disini">
            </form>
        </div>

        <div class="col-4">
            <a class=" btn btn-primary" href="/tampil/pesan_tiket">Tambah Data Mahasiswa</a>
        </div>

    </div>
</div>

<body>
    <div class="container">
        <div class="card mt-5">
            <div class="card-header text-center">
                <h1 class="text-center">Daftar User</h1>
            </div>
            <div class="card-body">
                <br>
                <table class="table table-bordered table-hover">
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
                    if($tikets->vaksin == 'belum' && $tikets->usia>=12){
                    $color = '#ED1C24';
                    }else if($tikets->vaksin =='sudah' && $tikets->usia<12){ $color='#FFFF00' ; }else{ $color='#1AC770'
                        ; } @endphp <tr style="background-color: <?=$color?>">
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
                Data Perhalaman : {{ $tiket->perPage() }} <br><br>

                {{ $tiket->links() }}

            </div>
        </div>
    </div>
</body>

</html>
