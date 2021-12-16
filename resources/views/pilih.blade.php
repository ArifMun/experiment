<!DOCTYPE html>
<html lang="en">
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<style>
.container {
    font-family: Arial, Helvetica, sans-serif;
    border-radius: 2px 8px 8px 2px;
    background-color: #7942ea;
    display: inline-block;
    padding: 5px 5px;
    color: white;
}
</style>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="container">
        Makanan : {{$makanan}} <br>
        Minuman : {{$minuman}}
    </div>
</body>

</html>