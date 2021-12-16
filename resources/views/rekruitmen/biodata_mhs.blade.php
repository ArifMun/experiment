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
            <th>Tempat</th>
            <th>Tanggal lahir</th>
            <th>Angkatan</th>

        </tr>
        @foreach($biodata as $data)
        <tr>
            <td><?= $data['nim']; ?></td>
            <td><?= $data['nama']; ?></td>
            <td><?= $data['tempat']; ?></td>
            <td><?= $data['tgl_lahir']; ?></td>
            <td><?= $data['angkatan']; ?></td>

        </tr>
        @endforeach
    </table>
</body>

</html>