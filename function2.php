<?php 

function LuasLingkaran($r) {
    $luas = 3.14 * $r * $r;
    return $luas; 
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Luas Lingkaran adalah <?= LuasLingkaran(7) ?> m2 </h1>
</body>
</html>