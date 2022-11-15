<?php
// Koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "phpdasar");

// Cek apakah tombol submit sudah pernah ditekan atau belum
if (isset($_POST["submit"])) {
    // var_dump($_POST);
    // ambil dan masukkan data dari yang dikirim dalam form
    $nip = $_POST["Nip"];
    $nama = $_POST["Nama"];
    $email = $_POST["Email"];
    $jabatan = $_POST["Jabatan"];
    $gambar = $_POST["Gambar"];

    // Query insert data, urutan sesuaikan dengan tabel di database
    $query = "INSERT INTO pegawai VALUES ('', '$nama', '$nip', '$email', '$jabatan', '$gambar')";
    mysqli_query($conn, $query);

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
                <input type="text" name="Nip" id="nip">
            </li>
            <li>
                <label for="nama">Nama : </label>
                <input type="text" name="Nama" id="nama">
            </li>
            <li>
                <label for="email">Email : </label>
                <input type="text" name="Email" id="email">
            </li>
            <li>
                <label for="jabatan">Jabatan : </label>
                <input type="text" name="Jabatan" id="jabatan">
            </li>
            <li>
                <label for="gambar">Gambar : </label>
                <input type="text" name="Gambar" id="gambar">
            </li>
            <li>
                <button type="submit" name="submit">Tambah Data</button>
            </li>
        </ul>
    </form>
</body>
</html>