<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nota</title>
</head>
<style>
table,
tr,
th,
td {
    border: 1px solid black;
    border-collapse: collapse;
}
</style>

<body>
    <h1>Pengisian Pulsa Berhasil</h1>
    <table>
        <tr>
            <th>No Hp</th>
            <th>Provider</th>
            <th>Nominal Pulsa</th>
            <th>Uang Kembali</th>
            <th>Transaksi</th>
        </tr>
        <!-- tapa perulangan foreach karena menggunakan orderby -->
        <tr>
            <td>{{$pulsa->nama_provider}}</td>
            <td>{{$pulsa->no_hp}}</td>
            <td>{{$pulsa->nominal_pulsa}}</td>
            <td>{{($pulsa->saldo)-($pulsa->nominal_pulsa)}}</td>
            <td>{{$pulsa->created_at}}</td>
        </tr>

    </table>
</body>

</html>