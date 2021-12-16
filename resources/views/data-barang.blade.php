<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<!-- <style>
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
</style> -->


<body>
    <!-- <table id="data-buku">
        <tr>
            <th>No</th>
            <th>Kode Barang</th>
            <th>Nama Barang</th>
            <th>Tanggal Masuk</th>
        </tr>
        <?php foreach ($nama as $barang) : ?>
        <tr>
            <td><?= $barang[0]; ?></td>
            <td><?= $barang; ?></td>
            <td><?= $barang; ?></td>
            <td><?= $barang; ?></td>
        </tr>
        <?php endforeach; ?>
    </table> -->
    <h3>
        <?= $judul; ?>

    </h3>
    <?php foreach ($nama as $barang) : ?>
    <p><?= $barang; ?></p>
    <?php endforeach; ?>
</body>

</html>