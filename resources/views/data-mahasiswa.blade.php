<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <title>Data Mahasiswa</title>
</head>
<body>
    <table>
        <tr>
            <th>judul</th>
            <th>penulis</th>
            <th>tahun</th>
        </tr>
        <tr>
            <td>{{$judul}}</td>
            <td>{{$penulis}}</td>
            <td>{{$tahun}}</td>
            </tr>
    </table>
</body>
</html>