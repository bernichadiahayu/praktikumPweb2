<?php 
    require 'balok.php';

    $balok = new Balok;
    $balok->setPanjang(5);
    $balok->setlebar(2);
    $balok->settinggi(4);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>192410101008</title>
</head>
<body>
    
    <h3>Bernicha Diah Ayu Safitri</h3>

    <h1>Bangun ruang : Balok</h1>
    <ul>
        <li>Panjang : <?php echo($balok->getPanjang())?> </li>
        <li>Lebar : <?php echo($balok->getlebar()) ?></li>
        <li>Tinggi : <?php echo($balok-> gettinggi())?></li>
        <li>Luas : <?php echo($balok-> getLuas())?></li>
        <li>Volume : <?php echo($balok-> getVolume())?></li>
    </ul>


</body>
</html>