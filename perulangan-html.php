<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perulangan Tabel</title>
    <style>
        .warna-baris {
            background-color : silver;
        }
    </style>
</head>
<body>
    <table border="1" cellpadding="10" cellspacing="0">
        <?php
        for($i=1;$i<=5;$i++) {
            echo "<tr>";
                for($j=1;$j<=5;$j++) {
                    echo "<td>$i,$j</td>";             
                }
            echo "</tr>";
        }
        ?>
    </table>
    <br>
    <table border="1" cellpadding="10" cellspacing="0">
        <?php for($i=1;$i<=5;$i++) : ?>
            <tr>
                <?php for($j=1;$j<=5;$j++) : ?>
                    <td><?= "$i,$j"; ?></td>
                <?php endfor; ?>
            </tr>
        <?php endfor; ?>
    </table>
    <br>
    <table border="1" cellpadding="10" cellspacing="0">
        <?php for($i=1;$i<=5;$i++) : ?>
            <?php if($i%2 == 0) : ?>    
                <tr class="warna-baris">
            <?php else : ?>
                <tr>
            <?php endif; ?>
                    <?php for($j=1;$j<=5;$j++) : ?>
                        <td><?= "$i,$j"; ?></td>
                    <?php endfor; ?>
                </tr>
        <?php endfor; ?>
    </table>
    <br>
    <table border="1" cellpadding="10" cellspacing="0">
        <?php for($i=1;$i<=5;$i++) : ?>
            <tr>
                <?php for($j=1;$j<=5;$j++) : ?>
                    <?php if($j%2 == 0) : ?>
                        <td class="warna-baris"><?= "$i,$j"; ?></td>
                    <?php else : ?>
                        <td><?= "$i,$j"; ?></td>
                    <?php endif; ?>
                <?php endfor; ?>
            </tr>
        <?php endfor; ?>
    </table>
</body>
</html>