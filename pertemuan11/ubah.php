<?php
require_once 'functions.php';

// ambil data di URL
$id = $_GET["id"];
// var_dump($id);

// Query data pegawai berdasarkan ID
$pgw = query("SELECT * FROM pegawai WHERE Id=$id")[0];
// var_dump($pgw);

// Cek apakah tombol submit sudah pernah ditekan atau belum
if (isset($_POST["submit"])) {

    // Cek apakah data berhasil diubah atau tidak (affected rows)
    if(ubah($_POST) > 0) {
        echo "
        <script>
            alert('Data berhasil diubah!');
            document.location.href = 'index.php';
        </script>
        ";
    } else {
        echo "
        <script>
            alert('Data gagal diubah!');
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
    <title>Ubah Data Pegawai</title>
</head>
<body>
    <h1>Ubah Data Pegawai</h1>

    <form action="" method="post">
        <input type="hidden" name="Id" value="<?= $pgw["Id"]; ?>">
        <ul>
            <li>
                <label for="nip">NIP : </label>
                <input type="text" name="Nip" id="nip" required 
                value=<?= $pgw["Nip"] ?>>
            </li>
            <li>
                <label for="nama">Nama : </label>
                <input type="text" name="Nama" id="nama" required
                value=<?= $pgw["Nama"] ?>>
            </li>
            <li>
                <label for="email">Email : </label>
                <input type="text" name="Email" id="email" required
                value=<?= $pgw["Email"] ?>>
            </li>
            <li>
                <label for="jabatan">Jabatan : </label>
                <input type="text" name="Jabatan" id="jabatan" required
                value=<?= $pgw["Jabatan"] ?>>
            </li>
            <li>
                <label for="gambar">Gambar : </label>
                <input type="text" name="Gambar" id="gambar" required
                value=<?= $pgw["Gambar"] ?>>
            </li>
            <li>
                <button type="submit" name="submit">Ubah Data</button>
            </li>
        </ul>
    </form>
</body>
</html>