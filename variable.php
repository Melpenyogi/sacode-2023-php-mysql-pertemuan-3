<?php

// String
$string = "Tipe data string digunakan untuk menampilkan karakter ";

$namaDepan = 'Melpen ';
$namaBelakan = 'Yogi ';
$alamat = 'Waena ';

// Integer/int
$x = 7;
$y = 9;

$tambah = $x + $y;
$kurang = $x - $y;
$kali = $x * $y;
$bagi = $x / $y;

// Float
$float = 'Type data float digunakan untuk menyimpan bilangan pecahan';

$pecahan = 10.4;
$pecahan_dua = 22.7;

// bolean
$bolean = 'Type data hanya berisi dua nilai true atau false';
$satu = true;
$nol = false;

// AND = X 
$and = $satu && $nol;

// OR
$or = $satu || $nol;

// null
$null = 'Type nul biasa di gunakan untuk mengantikan varable yang kosong';
$r = ' ';
$r = null;


// Array
$array = 'Type data di gunakan untuk menyimpan banyak data dalam satu variable';
$nama = ['Melpen', 'Samuel', 'Janzen'];





?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!-- Menampilkan Variable String -->
    <p><?= $string ?></p>
    <p> Nama Saya <?= $namaDepan . $namaBelakan ?></p>
    <p> Saya Tinggal <?= $alamat ?></p>

    <p> Tipe integer digunakan untuk menyimpan data bilangan bulat </p>

    <p> <?= $x ?> + <?= $y ?> = <?= $tambah ?> </p>
    <p> <?= $x ?> - <?= $y ?> = <?= $kurang ?> </p>
    <p> <?= $x ?> x <?= $y ?> = <?= $kali ?> </p>
    <p> <?= $x ?> : <?= $y ?> = <?= $bagi ?> </p>


    <br>
    <br>
    <p> <?= $float ?> </p>
    <p> <?= $pecahan_dua ?> </p>


    <br>
    <br>
    <p> <?= $bolean ?> </p>
    <p> <?php var_dump($and) ?> </p>
    <p> <?php var_dump($or) ?> </p>


    <br>
    <br>
    <p> <?= $null ?> </p>
    <p> <?php var_dump($r) ?> </p>

    <br>
    <br>
    <p> <?= $array ?> </p>

    <?php foreach ($nama as $n) : ?>
        <p> <?= $n ?> </p>
    <?php endforeach; ?>



</body>

</html>