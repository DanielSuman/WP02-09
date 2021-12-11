<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Nahodny pocet nakazenych (Random PES)</h2>
    <br>
    <?php
    $nakazeni = rand(1, 250000);
    function getPES(int $nakazeni){
        if( $nakazeni <= 10000 ) {$pes = 1;}
        elseif(( $nakazeni > 10000 ) && ( $nakazeni <= 50000)) {$pes = 2;}
        elseif(( $nakazeni > 50000 ) && ( $nakazeni <= 100000)) {$pes = 3;}
        elseif(($nakazeni > 100000 ) && ( $nakazeni <= 200000)) {$pes = 4;}
        elseif($nakazeni > 200000) {$pes = 5;}
        return $pes;
    }
    echo getPES($nakazeni)
    ?>
    <br>
    <h2>Pevný PES</h2><br>
    <?php echo getPES(10000); // vypíše 1 ?><br>
    <?php echo getPES(50000); // vypíše 2 ?><br>
    <?php echo getPES(100001); // vypíše 4 ?><br>
</body>
</html>