<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daring</title>
</head>
<style>
    table,
    tr,
    th,
    td {
        border: 1px solid black;
        border-collapse: collapse;
    }

</style>


<body>
    <table>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Username</th>
            <th>No Telepon</th>
        </tr>
        <?php $no = 1; ?>
        @foreach($data as $users)
        <tr>
            <td>{{$no++}}</td>
            <td>{{$users->name}}</td>
            <td>{{$users->email}}</td>
            <td>{{$users->username}}</td>
            <td>{{$users->phone}}</td>
        </tr>
        @endforeach
    </table>

</body>

</html>
