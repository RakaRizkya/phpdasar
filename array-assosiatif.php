<?php

// array numerik
// $pegawai = [["Nicholas", "19970407", "PSDJ", "rakarizkya07@gmail.com"], ["Unyil", "19880903", "PP", "email@gmail.com"]];

// array assosiatif
$pegawai = [
    [
        "nip" => "19970407",
        "nama" => "Nicholas Saputra", 
        "jabatan" => "PSDJ", 
        "email" => "nicholas.saputra@gmail.com",
        "gambar" => "foto1.jpg"
    ],        
    [
        "nama" => "Unyil",
        "nip" => "19880903",
        "jabatan" => "PP",
        "email" => "email@gmail.com",
        "gambar" => "foto2.jpg"
        ]
    ];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Pegawai</title>
</head>
<body>
    <h1>Data Pegawai</h1>

    <?php foreach($pegawai as $pgw) : ?>
        <ul>
            <li><img src="img/<?= $pgw["gambar"]; ?>"></li>
            <li>Nama : <?= $pgw["nama"]; ?></li>
            <li>NIP : <?= $pgw["nip"]; ?></li>
            <li>Jabatan : <?= $pgw["jabatan"]; ?></li>
            <li>Email : <?= $pgw["email"]; ?></li>        
        </ul>
    <?php endforeach ?>
</body>
</html>