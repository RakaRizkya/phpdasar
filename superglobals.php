<?php
// variable scope
// $x = 7;
// echo $x;
// 
// function tampilx() {
//     global $x;
//     // $x = 20;
//     echo $x;
// }
// 
// tampilx();
// echo "<br>";
// echo $x;


// SUPERGLOBALS
// var_dump($_SERVER);


// $_GET
// $_GET["nama"] = "Raka";
// $_GET["nip"] = "19970407";
// var_dump($_GET);

$pegawai = [
    [
        "nama" => "Raka", 
        "nip" => "19970407", 
        "jabatan" => "PSDJ", 
        "email" => "rakarizkya07@gmail.com",
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

    <?php foreach($pegawai as $pgw) { ?>
        <li>
            <a href="detail.php?nama=<?= $pgw["nama"];?>&nip=<?= $pgw["nip"];?>&email=<?= $pgw["email"];?>&jabatan=<?= $pgw["jabatan"];?>&gambar=<?= $pgw["gambar"];?>"><?php echo $pgw["nama"]; ?></a>
        </li>   
    <?php } ?>
</body>
</html>

