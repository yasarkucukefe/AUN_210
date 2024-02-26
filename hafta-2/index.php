<?php

$degisken_1 = "Elma";
$degisken_2 = "Armut";

// echo $degisken_1 . " ve " . $degisken_2;

$_liste = ["Ahmet","Ayşe","Melike"];

$_rakam = 1;

$_yeni =  $_rakam * 2;

$_array = array("yk"=>"Yasar Kucukefe","ek"=>"Erkan Koç");

echo  $_array["yk"];

$buyuk_harfli = strtoupper($degisken_1);

?>



<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>210 Dersi</title>
</head>
<body>

    

    <?php 
        $ders_adi = "210 - Sunucu taraflı programlama";

        echo "<h1> {$ders_adi} </h1>"; // "<h1>" . $ders_adi . "</h1>";

        foreach ($_liste as $isim) {
            echo "<br>".$isim;
        }

     ?>

</h1>
</body>
</html>
