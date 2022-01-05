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
        display: inline-block;
    }

    .message {
        /* font-size: 10px */
    }

    input {
        display: flex;
        justify-content: center;
    }

</style>

<body>
    <form action="/tampil/proses_pesan_tiket" method="POST">
        <h3 class="text-center">Pesan Tiket</h3>
        @csrf
        <div class="row mb-1 col-md-14">
            <label class="col-sm-2 col-form-label col-form-label-sm">Nama</label>
            <input type="text" class="form-control form-control-sm" name="nama_lengkap">
        </div>
        @error('nama_lengkap')
        <div class="message"><span style="color: red">{{ $message }}</span></div>
        @enderror

        <div class="row mb-1 col-md-14">
            <label class="col-sm-2 col-form-label col-form-label-sm">No Reservasi</label>
            <input type="no_reservasi" class="form-control form-control-sm" name="no_reservasi">
        </div>
        @error('no_reservasi')
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
            <label class="col-sm-2 col-form-label col-form-label-sm">No Tempat Duduk</label>
            <input type="text" class="form-control form-control-sm" name="no_tempat_duduk">
        </div>
        @error('no_tempat_duduk')
        <div class="message"><span style="color: red">{{ $message }}</span></div>
        @enderror

        <div class="row mb-1 col-md-14">
            <label class="col-sm-14 col-form-label col-form-label-sm">vaksin</label>
            <input type="text" class="form-control form-control-sm" name="vaksin"
                placeholder="isi dengan sudah / belum">
        </div>
        @error('vaksin')
        <div class="message"><span style="color: red">{{ $message }}</span></div>
        @enderror

        <div class="row mb-1 col-14">
            <button type="submit" class="btn btn-primary">Pesan Tiket</button>
        </div>
    </form>

</body>

</html>
