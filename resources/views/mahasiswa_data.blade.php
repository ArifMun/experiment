<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
table,
tr,
td,
th {
    text-align: center;
    padding: 5px;
    border: 1px solid black;
    border-collapse: collapse;
}
</style>

<body>
    <table>
        <tr>
            <th>No</th>
            <th>NIM</th>
            <th>Nama</th>
            <th>Alamat</th>
        </tr>
        @foreach($data as $mhs)
        <tr>
            <td>{{$mhs->id}}</td>
            <td>{{$mhs->nim}}</td>
            <td>{{$mhs->nama}}</td>
            <td>{{$mhs->alamat}}</td>
        </tr>
        @endforeach
    </table>
</body>

</html>