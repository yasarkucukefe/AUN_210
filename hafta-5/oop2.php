<?php 

include "util/hesap.php";

$_hesaplar = new Hesap();

$_hesap = $_hesaplar->ozel_hesap(6,8);

echo $_hesap;
echo "<hr>";

$_baska_hesap = $_hesaplar -> baska_hesap(5);
echo $_baska_hesap;

echo "<hr>";
echo $_hesaplar->polimorfizm();

 ?>
