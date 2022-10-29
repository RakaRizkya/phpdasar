<?php
// tanpa array
// $hari1 = "Senin";
// $hari2 = "Selasa";
// $hari3 = "Rabu";

// array
// cara lama
// $hari = array("Senin", "Selasa", "Rabu", "Kamis", "Jum'at");

// cara baru
$hari = ["Senin", "Selasa", "Rabu", "Kamis", "Jum'at"];

// menampilkan array
// print_r($hari);
// echo "<br>";
// //atau
// var_dump($hari);
// echo "<br>";

// mengakses elemen array
// echo $hari[3];

// menambahkan elemen pada array
print_r($hari);
echo "<br>";
$hari[] = "Sabtu";
$hari[] = "Minggu";
print_r($hari);

?>