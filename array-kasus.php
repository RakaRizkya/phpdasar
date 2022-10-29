<?php
$pegawai = [["Raka", "19970407", "PSDJ", "rakarizkya07@gmail.com"], ["Unyil", "19880903", "PP", "email@gmail.com"]];
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
        <ul>
            <li>Nama : <?php echo $pgw[0]; ?></li>
            <li>NIP : <?php echo $pgw[1]; ?></li>
            <li>Jabatan : <?php echo $pgw[2]; ?></li>
            <li>Email : <?php echo $pgw[3]; ?></li>        
        </ul>
    <?php } ?>
</body>
</html>