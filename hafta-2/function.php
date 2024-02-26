<?php 

function merhaba(){
    echo "Merhaba";
}

function merhabaIsim($isim){
    echo "Merhaba ".$isim;
}

function toplam($a, $b){
    $toplam = $a + $b;
    return $toplam;
}

merhaba();
echo "<br>";
merhabaIsim("Mustafa");

$sonuc = toplam(4,5);
echo "<br>".$sonuc;

 ?>
