<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
.container {
    font-family: Arial, Helvetica, sans-serif;
    border-radius: 20px 0 20px 0;
    background-color: #D0D0D0;
    padding: 20px;
    width: 25%;
}

input[type=text] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

button[type=submit] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    cursor: pointer;
    background-color: #89A452;
}

button:hover {
    background-color: #00A1D6;
}
</style>

<body>
    <div class="container">
        <form action="" id="isi-data">
            <label for="">No</label>
            <input type="text">
            <label for="">Judul Buku</label>
            <input type="text">
            <label for="">Penulis</label>
            <input type="text">
            <label for="">Penerbit</label>
            <input type="text">
            <button type="submit">Kirim!</button>
        </form>
    </div>
</body>

</html>