<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
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

<body>
    <table class="table table-striped">
        <tr>
            <th>No</th>
            <th>NIM</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>usia</th>
            <th>hobi</th>
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
            <td colspan="2"><a href="tabel_mahasiswa/proses/{{ $mhs->id }}" class="btn btn-primary">UBAH</a></td>
        </tr>
        @endforeach
    </table>
</body>

</html>
