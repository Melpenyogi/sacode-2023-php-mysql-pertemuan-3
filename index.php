<?php
// Kata Selamat Datang
$welcome = 'SELAMAT DATANG';

// nama saya 
$nama = 'Melpen';

$keterangan = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit, voluptatibus. Veniam incidunt similique ab autem, est, distinctio minus, numquam neque eius ipsum perferendis? Quis reprehenderit distinctio doloribus natus ab culpa.';

$footer = 'copyright by Melpen';




?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <h1> <?= $welcome . ' ' . $nama ?> </h1>
    <p> <?= $keterangan ?> </p>

    <p> <?= $footer ?> </p>

</body>

</html>