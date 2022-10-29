<?php
// Ini Komentar
/* Ini Juga 
Komentar */

// Standar Output : echo, print, print_r, var_dump

//echo "Hello World";
//print "Hello World";
//print_r("Hello World");
//var_dump("Hello World");

// $nama = "Raka";
// echo "Nama Saya $nama";
// echo "<br>";
// echo 'Nama saya $nama';
// echo "<br>";

 
// Operator + - / * %
// $angka1 = 15;
// $angka2 = 4;
// echo $angka1 % $angka2;
// echo "<br>";
 
// Concat .
// $nama_depan = "Raka";
// $nama_belakang = "Rizkya";
// echo $nama_depan . " Rizkya <br>";
// echo $nama_depan . " " . $nama_belakang;

// Assignment = += -= *= /= %= .=
// $m = 1;
// $m .= 2;
// echo $m;

// Perbandingan <, >, <=, >=, ==, !=
// var_dump(1 != 5);  
// var_dump(1 == "1");

// Identitas : ===, !==
// var_dump(1 !== 1);

// Logika : AND (&&), OR(||), NOT (!)
// var_dump(1<5 || 2>3);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar PHP</title>
</head>
<body>
    <?php
        // $nama = "Raka";
        // echo "<h1>Nama Saya $nama</h1>";
    ?>
    <?php $nama="Raka"; ?>
    <h1>Nama Saya <?= $nama; ?></h1>
</body>
</html>