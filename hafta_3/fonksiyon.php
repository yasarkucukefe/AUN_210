<?php 

function fonksiyon_adi ($_arg1, $_arg2){
    $_islem = $_arg1 + $_arg2;
    return $_islem;
}

$_toplam = fonksiyon_adi(3, 5);
echo $_toplam;

function alan_hesapla ($_kenar){
    $_alan = $_kenar * $_kenar;
    return $_alan;
}
echo "<hr>";
$_a = 2;
$_sonuc = alan_hesapla($_a);
echo $_sonuc;

echo "<br>";
function daire_alan($_r = 2){
    $_alan = 3.14 * $_r * $_r;
    return $_alan;
}

echo daire_alan();

echo "<br>";
function hesapla($_a, $_b, $_c=2){
    return $_a + $_b + $_c;
}

echo hesapla(1, 4);

 ?>
