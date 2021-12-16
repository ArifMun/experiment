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
form {
    width: 60%;
}

input:[checkbox] {
    width: 20px;
}
</style>

<body>
    <form action="/formulir/proses" method="post" enctype="multipart/form-data">
        @csrf
        <label>NIM :</label>
        <input type="text" name="nomer"><br>
        <label>Nama :</label>
        <input type="text" name="nama"><br>
        <label>Tempat Tanggal Lahir :</label><br>
        <input type="text" name="ttl">
        <input type="text" name="tanggal"><br>
        <label>Tahun Angkatan :</label><br>
        <select name="tahun">
            <option value="2019/2020">2019/2020</option>
            <option value="2020/2021">2020/2021</option>
        </select><br>
        <label>Jenis Kelamin :</label>
        laki-laki
        <input type="checkbox" name="laki-laki" value="laki-laki">
        perempuan
        <input type="checkbox" name="perempuan" value="perempuan"><br>
        <label>Upload Foto :</label>
        <input type="file" name="file"><br>
        <label>Alamat</label>
        <textarea name="alamat"></textarea>
        <input type="submit">
        <input type="submit">
    </form>
</body>

</html>