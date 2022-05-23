<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TASYA | Taman Isyarat</title>
</head>
<body>
    <b>Halo user {{ $details['email'] }}</b>
    <h3>Kami mendapatkan permintaan untuk lupa password akun kamu.</h3>
    <p>Password yang kamu gunakan adalah {{ $details['pass'] }}</p>
    <br><br>
    <p>karena itu kami memberikan tautan untuk lupa password ke tautan berikut {{ url('/reset-pass') }}</p>
    <p>Dengan Hormat,</p>
    <b>Tim Taman Isyarat</b>
</body>
</html>
