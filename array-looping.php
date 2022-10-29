<?php
$angka = [1,5,3,25,67,22,56,23];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .warna-cell {
            width: 50px;
            height: 50px;
            background-color: salmon;
            text-align: center;
            line-height: 50px;
            margin: 3px;
            float: left;
        }

        .clear {
            clear: both;
        }
    </style> 
</head>
<body>
    <?php for($i=0; $i<count($angka); $i++) : ?>
        <div class="warna-cell"><?= $angka[$i]; ?></div>
    <?php endfor ?>
    <div class="clear"></div>
    <?php foreach($angka as $a) : ?>
        <div class="warna-cell"><?= $a; ?></div>
    <?php endforeach ?>
</body>
</html>