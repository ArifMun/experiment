<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
#data-buku {
    font-family: Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 50%;
}

#data-buku td,
#data-buku th {
    border: 1px solid #ddd;
    padding: 8px;
}

#data-buku tr:nth-child(even) {
    background-color: #f2f2f2;
}

#data-buku tr:hover {
    background-color: #ddd;
}

#data-buku th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: center;
    background-color: #7942ee;
    color: white;
}
</style>
<?php
$buku = [
    ['judul-buku' => "Metode Penelitian Kualitatif", 'penulis' => "Sugiyono", 'penerbit' => "Alfabeta"],
    ['judul-buku' => "Metode Penelitian Kuantitatif", 'penulis' => "Sugiyono", 'penerbit' => "Alfabeta"],
    ['judul-buku' => "Piawai Menembus Jurnal Terakreditasi", 'penulis' => "Wahyu Wibowo", 'penerbit' => "Bumi Aksara"],
    ['judul-buku' => "Gizi Kesehatan Masyarakat", 'penulis' => "Michael J. Gibney", 'penerbit' => "EGC"],
    ['judul-buku' => "Kepemimpinan Kesehatan Masyarakat", 'penulis' => "Louis Rowitz", 'penerbit' => "EGC"],
];
?>

<body>
    <table id="data-buku">
        <tr>
            <th>No</th>
            <th>Judul</th>
            <th>Penulis</th>
            <th>Penerbit</th>
        </tr>
        <?php $i = 1;
        foreach ($buku as $data) : ?>
        <tr>
            <td><?= $i; ?></td>
            <td><?= $data['judul-buku']; ?></td>
            <td><?= $data['penulis']; ?></td>
            <td><?= $data['penerbit']; ?></td>
        </tr>
        <?php $i++; ?>
        <?php endforeach; ?>
    </table>
</body>

</html>