<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
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
    <form action="/tabel_mahasiswa/proses/ubah" method="POST">
        <h3 class="text-center">UBAH DATA</h3>
        @csrf
        <input type="hidden" name="id" value="{{ $ubah->id }}">
        <div class="row mb-1 col-md-14">
            <label class="col-sm-2 col-form-label col-form-label-sm">NIM</label>
            <input type="text" class="form-control form-control-sm" name="nim" value="{{ $ubah->nim }}">
        </div>
        @error('nim')
        <div class="message"><span style="color: red">{{ $message }}</span></div>
        @enderror
        <div class="row mb-1 col-md-14">
            <label class="col-sm-2 col-form-label col-form-label-sm">Nama</label>
            <input type="text" class="form-control form-control-sm" name="nama" value="{{ $ubah->nama }}">
        </div>
        @error('nama')
        <div class="message"><span style="color: red">{{ $message }}</span></div>
        @enderror
        <div class="row mb-1 col-md-14">
            <label class="col-sm-2 col-form-label col-form-label-sm">Alamat</label>
            <input type="text" class="form-control form-control-sm" name="alamat" value="{{ $ubah->alamat }}">
        </div>
        @error('alamat')
        <div class="message"><span style="color: red">{{ $message }}</span></div>
        @enderror
        <div class="row mb-1 col-md-14">
            <label class="col-sm-2 col-form-label col-form-label-sm">Usia</label>
            <input type="text" class="form-control form-control-sm" name="usia" value="{{ $ubah->usia }}">
        </div>
        @error('usia')
        <div class="message"><span style="color: red">{{ $message }}</span></div>
        @enderror
        <div class="row mb-1 col-md-14">
            <label class="col-sm-14 col-form-label col-form-label-sm">Hobi</label>
            <input type="text" class="form-control form-control-sm" name="hobi" value="{{ $ubah->hobi }}">
        </div>
        @error('hobi')
        <div class="message"><span style="color: red">{{ $message }}</span></div>
        @enderror
        <div class="row mb-1 col-14">
            <button type="submit" class="btn btn-primary">Ubah Data</button>
        </div>
    </form>

</body>

</html>
