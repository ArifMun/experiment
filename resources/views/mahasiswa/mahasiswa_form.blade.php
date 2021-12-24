<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ url('css/bootstrap-grid.min.css') }}">
    <link rel="stylesheet" href="{{ url('css/bootstrap.min.css') }}">
    <title>View Data</title>
</head>
<style>
    body {
        display: flex;
        justify-content: center;
    }

    form {
        margin: 20px;
        border: 1px solid silver;
        padding: 20px;
    }

</style>

<body>
    <form action="/tabel_mahasiswa/proses/tambah" method="POST">
        <h3 class="text-center">TAMBAH DATA MAHASISWA</h3>
        @csrf
        <input type="hidden" name="id">
        <div class="row mb-1 col-md-14">
            <label class="col-sm-2 col-form-label col-form-label-sm">NIM</label>
            <input type="text" class="form-control form-control-sm" name="nim">
        </div>
        @error('nim')
        <div class="message"><span style="color: red">{{ $message }}</span></div>
        @enderror
        <div class="row mb-1 col-md-14">
            <label class="col-sm-2 col-form-label col-form-label-sm">Nama</label>
            <input type="text" class="form-control form-control-sm" name="nama">
        </div>
        @error('nama')
        <div class="message"><span style="color: red">{{ $message }}</span></div>
        @enderror
        <div class="row mb-1 col-md-14">
            <label class="col-sm-2 col-form-label col-form-label-sm">Alamat</label>
            <input type="text" class="form-control form-control-sm" name="alamat">
        </div>
        @error('alamat')
        <div class="message"><span style="color: red">{{ $message }}</span></div>
        @enderror
        <div class="row mb-1 col-md-14">
            <label class="col-sm-2 col-form-label col-form-label-sm">Usia</label>
            <input type="text" class="form-control form-control-sm" name="usia">
        </div>
        @error('usia')
        <div class="message"><span style="color: red">{{ $message }}</span></div>
        @enderror
        <div class="row mb-1 col-md-14">
            <label class="col-sm-14 col-form-label col-form-label-sm">Hobi</label>
            <input type="text" class="form-control form-control-sm" name="hobi">
        </div>
        @error('hobi')
        <div class="message"><span style="color: red">{{ $message }}</span></div>
        @enderror
        <div class="row mb-1 col-14">
            <button type="submit" class="btn btn-primary">TAMBAH DATA</button>
        </div>
    </form>

</body>

</html>
