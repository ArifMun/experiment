<!DOCTYPE html>
<html lang="en">
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
#biodata {
    font-family: Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 50%;
}

#biodata td,
#biodata th {
    border: 1px solid #ddd;
    padding: 8px;
}

#biodata tr:nth-child(even) {
    background-color: #f2f2f2;
}

#biodata tr:hover {
    background-color: #ddd;
}

#biodata th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: center;
    background-color: #7942ae;
    color: white;
}
</style>

<body>
    <table id="biodata">
        <tr>
            <th>NIM</th>
            <th>Nama</th>
            <th>TTL</th>
            <th>Tahun Angkatan</th>
            <th>Jenis Kelamin</th>
            <th>Foto</th>
            <th>Alamat</th>
        </tr>
        <tr>
            <td>{{$nomer}}</td>
            <td>{{$nama}}</td>
            <td>{{$ttl}}{{$tanggal}}</td>
            <td>{{$tahun}}</td>
            <td>{{$laki_laki}}
                {{$perempuan}}
            </td>
            <td>{{$file}}</td>
            <td>{{$alamat}}</td>
        </tr>
    </table>
</body>

</html>