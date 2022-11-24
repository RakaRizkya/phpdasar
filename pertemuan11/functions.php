<?php

// Koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "phpdasar");

function query($query) {
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}


function tambah($data) {
    global $conn;

    $nip = htmlspecialchars($data["Nip"]);
    $nama = htmlspecialchars($data["Nama"]);
    $email = htmlspecialchars($data["Email"]);
    $jabatan = htmlspecialchars($data["Jabatan"]);
    $gambar = htmlspecialchars($data["Gambar"]);

    $query = "INSERT INTO pegawai VALUES ('', '$nama', '$nip', '$email', '$jabatan', '$gambar')";
    mysqli_query($conn, $query);

    // Untuk menunjukkan query berhasil atau gagal
    return mysqli_affected_rows($conn);
}

function hapus($id) {
    global $conn;
    mysqli_query($conn, "DELETE FROM pegawai WHERE Id = $id");
    return mysqli_affected_rows($conn);
}

function ubah($data) {
    global $conn;

    $id = $data["Id"];
    $nip = htmlspecialchars($data["Nip"]);
    $nama = htmlspecialchars($data["Nama"]);
    $email = htmlspecialchars($data["Email"]);
    $jabatan = htmlspecialchars($data["Jabatan"]);
    $gambar = htmlspecialchars($data["Gambar"]);

    $query = "UPDATE pegawai SET
                Nip = '$nip',
                Nama = '$nama',
                Email = '$email',
                Jabatan = '$jabatan',
                Gambar = '$gambar'
                WHERE Id = $id
            ";
    mysqli_query($conn, $query);

    // Untuk menunjukkan query berhasil atau gagal
    return mysqli_affected_rows($conn);
}

?>