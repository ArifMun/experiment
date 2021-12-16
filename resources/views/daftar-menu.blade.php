<!DOCTYPE html>
<html lang="en">
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<style>
#warkop {
    font-family: Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 50%;
}

#warkop td,
#warkop th {
    border: 1px solid #ddd;
    padding: 8px;
}

#warkop tr:nth-child(even) {
    background-color: #f2f2f2;
}

#warkop tr:hover {
    background-color: #ddd;
}

#warkop th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: center;
    background-color: #7942ae;
    color: white;
}

button {
    margin-top: 10px;
    background-color: #7942ae;
    border: none;
    width: 70px;
    height: 30px;
    color: white;
    border-radius: 5px;
    cursor: pointer;
}

button:hover {
    background-color: #7942ee;
}

p {
    border: 1px solid black;
}

h3 {
    margin-top: -5px;
}

div {
    box-shadow: 5px 4px 12px 0px rgba(0, 0, 0, 0.6);
    color: white;
    display: inline-block;
    font-family: Arial, Helvetica, sans-serif;
    border: 1px solid black;
    margin: 5px 5px auto;
    padding: 10px 10px 10px 10px;
    border-radius: 5px;
    border-color: #7942ee;
    background-color: #7942ea;
}
</style>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Warkop</title>
</head>
<body>
    <form action="/formulir/proses" method="post">
        @csrf
        <table id="warkop">
            <tr>
                <th>Makanan</th>
                <th>Minuman</th>
            </tr>
            @foreach($menu as $menus)
            <tr>
                <td><input type="checkbox" name="makanan" value="<?= $menus["makanan"]; ?>"><?= $menus["makanan"]; ?>
                </td>
                <td><input type="checkbox" name="minuman" value="<?= $menus["minuman"]; ?>"><?= $menus["minuman"]; ?>
                </td>
            </tr>
            @endforeach
        </table>
        <button type="submit" value="submit" name="submit">PILIH</button>
    </form>
</body>
</html>