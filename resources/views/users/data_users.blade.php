<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Daring</title>
</head>
<style>
    body {
        margin: 60px;
    }

    a {
        text-decoration: none;
    }

    table {
        border: 1px solid silver;
    }

</style>

@if (session('berhasil'))
<div class="alert alert-success text-center col-md-4">
    {{ session('berhasil') }}
</div>
@endif

<body>
    <h1 class="text-center">Daftar User</h1>
    <table class="table table-striped">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Username</th>
            <th>No Telepon</th>
            <th>Option</th>
        </tr>
        <?php $no = 1; ?>
        @foreach($data as $users)
        <tr>
            <td>{{$no++}}</td>
            <td>{{$users->name}}</td>
            <td>{{$users->email}}</td>
            <td>{{$users->username}}</td>
            <td>{{$users->phone}}</td>
            <td colspan="3"><a href="" class="btn btn-success">detail</a> <a href="users/ubah-data/{{ $users->id }}"
                    class="btn btn-primary">ubah</a> <a href="users/hapus-data/{{ $users->id }}" class="btn btn-danger"
                    onclick="return confirm('apakah anda yakin?')">hapus</a></td>
        </tr>
        @endforeach

    </table>

</body>

</html>
