<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Isi Pulsa</title>
</head>

<body>

    <div class="container">
        <h3>{{$header}}</h3>
        <form action="/form/nota" method="POST">
            @csrf
            <input type="text" name="nama_provider" placeholder="Provider"><br><br>
            @error('nama_provider')
            <div class="message"><span style="color:red">{{$message}}</span></div>
            @enderror
            <input type="text" name="no_hp" placeholder="No Hp"><br><br>
            @error('no_hp')
            <div class="message"><span style="color:red">{{$message}}</span></div>
            @enderror
            <input type="text" name="saldo" placeholder="Saldo"><br><br>
            <label>Nominal Pulsa</label>
            <select name="nominal_pulsa">
                <option value="2000">2000</option>
                <option value="5000">5000</option>
                <option value="10000">10000</option>
                <option value="15000">15000</option>
            </select>
            @error('saldo')
            <div class="message"><span style="color:red">{{$message}}</span></div>
            @enderror

            <input type="submit" name="submit" value="Isi Pulsa">
        </form>
    </div>

</body>

</html>