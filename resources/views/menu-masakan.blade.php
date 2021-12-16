<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<style>
.container {
    font-family: Arial, Helvetica, sans-serif;
    color: white;
    display: inline-block;
    background-color: #193963;
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.3), 0 8px 20px 0 rgba(0, 0, 0, 0.19);
    padding: 5px;
    border-radius: 5px 150px 5px 150px;
}

li {
    list-style-type: none;

}
</style>

<body>
    <div class="container">
        <h2>Menu Masakan</h2>
        <ul>
            <li>1. Rendang</li>
            <li>2. Tempoyak</li>
            <li>3. Soto Betawi</li>
        </ul>

    </div>
</body>

</html>