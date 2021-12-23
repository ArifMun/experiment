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
    <form action="/users/proses_tambah_data_pengguna" method="POST">
        <h3 class="text-center">TAMBAH DATA</h3>
        @csrf
        <div class="row mb-1 col-md-14">
            <label class="col-sm-2 col-form-label col-form-label-sm">Nama</label>
            <input type="text" class="form-control form-control-sm" name="nama">
        </div>
        @error('nama')
        <div class="message"><span style="color: red">{{ $message }}</span></div>
        @enderror
        <div class="row mb-1 col-md-14">
            <label class="col-sm-2 col-form-label col-form-label-sm">Email</label>
            <input type="email" class="form-control form-control-sm" name="email">
        </div>
        @error('email')
        <div class="message"><span style="color: red">{{ $message }}</span></div>
        @enderror
        <div class="row mb-1 col-md-14">
            <label class="col-sm-2 col-form-label col-form-label-sm">Username</label>
            <input type="text" class="form-control form-control-sm" name="username">
        </div>
        @error('username')
        <div class="message"><span style="color: red">{{ $message }}</span></div>
        @enderror
        <div class="row mb-1 col-md-14">
            <label class="col-sm-2 col-form-label col-form-label-sm">Password</label>
            <input type="password" class="form-control form-control-sm" name="password">
        </div>
        @error('password')
        <div class="message"><span style="color: red">{{ $message }}</span></div>
        @enderror
        <div class="row mb-1 col-md-14">
            <label class="col-sm-14 col-form-label col-form-label-sm">No. Handphone</label>
            <input type="text" class="form-control form-control-sm" name="phone">
        </div>
        @error('phone')
        <div class="message"><span style="color: red">{{ $message }}</span></div>
        @enderror
        <div class="row mb-1 col-md-14">
            <label class="col-sm-2 col-form-label col-form-label-sm">Roles</label>
            <select name="roles" class="form-select">
                <option value="User">User</option>
                <option value="Admin">Admin</option>
            </select>
        </div>
        <div class="row mb-1 col-14">
            <button type="submit" class="btn btn-primary">Tambah Data</button>
        </div>
    </form>


</body>

</html>
