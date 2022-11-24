<?php

require 'functions.php';
$pegawai = query("SELECT * FROM pegawai");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
</head>
<body>
    <h1>Data Pegawai</h1>

    <a href="tambah.php">Tambah Data Pegawai</a>
    <br><br>

    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No.</th>
            <th>Aksi</th>
            <th>Gambar</th>
            <th>NIP</th>
            <th>Nama</th>
            <th>Jabatan</th>
            <th>Email</th>
        </tr>
        <?php $i=1; ?>
        <?php foreach($pegawai as $row) : ?>
        <tr>
            <td><?= $i; ?></td>
            <td>
                <a href="ubah.php?id=<?= $row["Id"]; ?>">ubah</a> |
                <a href="hapus.php?id=<?= $row["Id"]; ?>" onclick="return confirm('Kamu Yakin??');">hapus</a>
            </td>
            <td><img src="../img/<?= $row["Gambar"]; ?>"></td>
            <td><?= $row["Nip"]; ?></td>
            <td><?= $row["Nama"]; ?></td>
            <td><?= $row["Jabatan"]; ?></td>
            <td><?= $row["Email"]; ?></td>
        </tr>
        <?php $i++; ?>
        <?php endforeach; ?>
    </table>
</body>
</html>