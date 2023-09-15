<?php

// Judul dari Halaman Web
$title = 'Comment';

# Header Dari Halaman Web
$header = 'Belajar Membuat Comment';

/*
Menyimpan Gambar dalam variable.
Gambar yang digunakan bersumber dari unsplash

*/
$gambar = 'https://images.unsplash.com/photo-1582426750875-13465457b9ce?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1375&q=80';


$video = '<iframe width="1342" height="480" src="https://www.youtube.com/embed/z6AUuQIWeJg" title="TVRI PAPUA PAKET PAPUA MEMBANGUN : SACODE UNTUK PAPUA" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>';



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> <?= $title ?> </title>
</head>

<body>

    <p> <?= $header ?> </p>
    <br>
    <img src="<?= $gambar ?>" width="200">
    <br>
    <p> <?= $video /* Video Bersumber Dari Youtube */   ?> </p>

</body>

</html>