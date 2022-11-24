<?php
require_once 'functions.php';

// Cek apakah tombol submit sudah pernah ditekan atau belum
if (isset($_POST["submit"])) {

    // Cek apakah data berhasil ditambahkan atau tidak (affected rows)
    if(tambah($_POST) > 0) {
        echo "
        <script>
            alert('Data berhasil ditambahkan!');
            document.location.href = 'index.php';
        </script>
        ";
    } else {
        echo "
        <script>
            alert('Data gagal ditambahkan!');
            document.location.href = 'index.php';
        </script>
        ";
    }

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Pegawai</title>
</head>
<body>
    <h1>Tambah Data Pegawai</h1>

    <form action="" method="post">
        <ul>
            <li>
                <label for="nip">NIP : </label>
                <input type="text" name="Nip" id="nip" required>
            </li>
            <li>
                <label for="nama">Nama : </label>
                <input type="text" name="Nama" id="nama" required>
            </li>
            <li>
                <label for="email">Email : </label>
                <input type="text" name="Email" id="email" required>
            </li>
            <li>
                <label for="jabatan">Jabatan : </label>
                <input type="text" name="Jabatan" id="jabatan" required>
            </li>
            <li>
                <label for="gambar">Gambar : </label>
                <input type="text" name="Gambar" id="gambar" required>
            </li>
            <li>
                <button type="submit" name="submit">Tambah Data</button>
            </li>
        </ul>
    </form>
</body>
</html>