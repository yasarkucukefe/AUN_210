<?php

include "util/islem.php";

$_islemler = new Islem(); // $_islemler : instance

$_toplam = $_islemler->topla(2, 5); // 
$_carpma = $_islemler->carpma(3, 9);


echo $_toplam;
echo "<br>";
echo $_carpma;
echo "<hr>";

/*
if($_islemler->sayisalDegerMi(5, 6)){  //private method erişilmez
    echo "Sayısal değer";
}
echo "<hr>";
*/

echo $_islemler->rakam;

echo "<hr>";

echo $_islemler->polimorfizm();

 ?>
