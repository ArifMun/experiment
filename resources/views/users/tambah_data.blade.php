<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Data</title>
</head>
<style>
input,
select,
level {
    display: block;
    margin: 10px;
}

label,
.message {
    margin-left: 10px;
}

input[type="text"],
input[type="password"],
input[type="email"],
select {
    width: 70%;
}

input[type="submit"] {
    float: right;
    margin-right: 80px;
}

.container-form {
    margin: 0 auto;
    width: 25%;
}
</style>

<body>
    <div class="container-form">
        <h3>{{$header}}</h3>
        <form action="/users/proses_tambah_data_pengguna" method="POST">
            @csrf
            <input type="text" name="nama" placeholder="Nama Lengkap">
            @error('nama')
            <div class="message"><span style="color:red;">{{$message}}</span></div>
            @enderror
            <input type="email" name="email" placeholder="Email">
            @error('email')
            <div class="message"><span style="color:red;">{{$message}}</span></div>
            @enderror
            <input type="text" name="username" placeholder="Username">
            @error('username')
            <div class="message"><span style="color:red;">{{$message}}</span></div>
            @enderror
            <input type="password" name="password" placeholder="Password">
            @error('password')
            <div class="message"><span style="color:red;">{{$message}}</span></div>
            @enderror
            <input type="text" name="phone" placeholder="No Handphone">
            @error('phone')
            <div class="message"><span style="color:red;">{{$message}}</span></div>
            @enderror
            <label>Level Pengguna</label>
            <select name="roles">
                <option value="User">User</option>
                <option value="Admin">Admin</option>
            </select>
            <input type="submit" name="submit" value="Tambah Data">
        </form>
    </div>
</body>

</html>