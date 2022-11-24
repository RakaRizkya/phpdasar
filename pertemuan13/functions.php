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
    // $gambar = htmlspecialchars($data["Gambar"]);
    // Upload Gambar
    $gambar = upload();
    if( !$gambar ) {
        return false;
    }

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
    $gambarLama = htmlspecialchars($data["gambarLama"]);


    // Cek apakah user mengupload file atau tidak
    if($_FILES['gambar']['error'] === 4) {
        $gambar = $gambarLama;
    } else {
        $gambar = upload();
    }

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

function upload() {
    // return false;
    $namaFile = $_FILES['gambar']['name'];
    $ukuranFile = $_FILES['gambar']['size'];
    $error = $_FILES['gambar']['error'];
    $tmpName = $_FILES['gambar']['tmp_name'];

    // Cek apakah tidak ada gambar yang diupload
    if($error === 4) {
        echo "<script>
            alert('Silahkan Pilih Gambar Terlebih Dahulu');
            </script>";
        return false;
    }

    // Cek apakah file yang diupload bertipe gambar
    $ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
    $ekstensiGambar = explode('.', $namaFile);
    $ekstensiGambar = strtolower(end($ekstensiGambar));
    if(!in_array($ekstensiGambar, $ekstensiGambarValid)) {
        echo "<script>
            alert('Yang Anda Upload Bukan Gambar');
            </script>";
        return false;
    }

    // Cek jika ukurannya terlalu besar (> 1 MB)
    if($ukuranFile > 1000000) {
        echo "<script>
            alert('Ukuran Gambar Terlalu Besar');
            </script>";
        return false;
    }

    // lolos pengecekan, file siap diupload
    // generate nama baru
    $namaFileBaru = uniqid();
    $namaFileBaru .= '.';
    $namaFileBaru .= $ekstensiGambar;

    move_uploaded_file($tmpName, '../img/' . $namaFileBaru);

    return $namaFileBaru;
}

function cari($keyword) {
    $query = "SELECT * FROM pegawai 
                WHERE 
                Nama LIKE '%$keyword%' OR
                Nip LIKE '%$keyword%' OR 
                Jabatan LIKE '%$keyword%' OR
                email LIKE '%$keyword%'";
    return query($query);
}

?>