<?php
// Koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "phpdasar");

// ambil data dari tabel pegawai / query data pegawai
$result = mysqli_query($conn, "SELECT * FROM pegawai");
// var_dump($result);
// if (!$result) {
//     echo mysqli_error($conn);
// }

// ambil data (fetch) pegawai dari object result
// mysqli_fetch_row() -> mengembalikan array numerik jadi datanya cuman 1
// mysqli_fetch_assoc() -> mengembalikan array assosiatif (ini yang dipake)
// mysqli_fetch_array() -> mengembalikan kedua jenis array, kekurangannya data jadi double n berat
// mysqli_fetch_object() -> mengembalikan object (kaitannya dengan OOP)

// $pgw = mysqli_fetch_row($result);
// var_dump($pgw);

// while ($pgw = mysqli_fetch_assoc($result)) {
//     var_dump($pgw);
// }

// $pgw = mysqli_fetch_array($result);
// var_dump($pgw);

// $pgw = mysqli_fetch_object($result);
// var_dump($pgw);
// var_dump($pgw->Nama); // Case Sensitive



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

    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No.</th>
            <th>Aksi</th>
            <th>Gambar</th>
            <th>NIP</th>
            <th>Nama</th>
            <th>Email</th>
        </tr>
        <?php $i=1; ?>
        <?php while ($row = (mysqli_fetch_assoc($result))) : ?>
        <tr>
            <td><?= $i; ?></td>
            <td>
                <a href="">ubah</a> |
                <a href="">hapus</a>
            </td>
            <td><img src="../img/<?= $row["Gambar"]; ?>"></td>
            <td><?= $row["Nip"]; ?></td>
            <td><?= $row["Nama"]; ?></td>
            <td><?= $row["Email"]; ?></td>
        </tr>
        <?php $i++; ?>
        <?php endwhile ?>
    </table>
</body>
</html>