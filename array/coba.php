<?php

$hari = ["senin","selasa","rabu","kamis"
,"jumaat","sabtu","minggu",] ;
var_dump ($hari) ;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>belajar array dalam php</title>
</head>
<body>
    <H1>HARI HARI </H1>
    <?php for ($i = 0 ; $i< 7 ; $i++) { ?>
        <li>
            <?php echo $hari [$i]; ?>
    </li>
    <?php } ?>
     
</body>
</html>