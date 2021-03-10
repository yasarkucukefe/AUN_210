<?php 

$_rakam1 = 25; //global scope
$_rakam2 = 52;

$_sonuc = toplam($_rakam1, $_rakam2);
echo "Toplama işleminin sonucu: ".$_sonuc;
echo "<hr>";
echo "toplam_global fonksiyonu return sonuc :".toplam_global();

echo "<hr>";
global_degisten_olustur();
echo $sonuc;



function toplam($a,$b){
    $_limit = 60; //local scope
    return $a + $b;
}

function toplam_global(){
    global $_rakam1, $_rakam2;
    return $_rakam1 + $_rakam2;
}

function global_degisten_olustur(){
    global $_rakam1, $_rakam2;
    // $GLOBALS['degisken_adi']
    // $degisken_adi global'de kullanılabilir.
    $GLOBALS['sonuc'] = $_rakam1 + $_rakam2;
} 

?>
