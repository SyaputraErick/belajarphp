<?php
$mahasiswa = ["Abdul Rahman",012345,"informatika","abdulrahman@ft.unbara.ac.id",] ;
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>data mahasiswa</title>
    </head>
<body>
    <?php for ($i = 0 ; $i< 4 ; $i++) { ?>
        <li>
            <?php echo $mahasiswa [$i]; ?>
    </li>
    <?php } ?>
    
    <?php foreach ($mahasiswa as $mhs) : ?>
            <li><?= $mhs; ?></li>
        <?php endforeach; ?>
</body>
</html>