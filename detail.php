<?php
// cek apakah tidak ada data di dalam $_GET
if(!isset($_GET["nama"]) ||
    !isset($_GET["nip"]) ||
    !isset($_GET["email"]) ||
    !isset($_GET["jabatan"]) ||
    !isset($_GET["gambar"])
    ) {
    // redirect
    header("Location: superglobals.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Pegawai</title>
</head>
<body>
    <ul>
        <li><img src="img/<?= $_GET["gambar"] ?>"></li>
        <li><?= $_GET["nama"] ?></li>
        <li><?= $_GET["nip"] ?></li>
        <li><?= $_GET["email"] ?></li>
        <li><?= $_GET["jabatan"] ?></li>
    </ul>
</body>
</html>