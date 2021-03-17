<?php 

// IF
$_a = true;
$_b = false;
$_c = 14;
$_d = "elma";
if($_a && $_c<15 && $_d === "elma" && $_b){
    echo "portakal";
}else{
    echo "armut";
}

echo "<hr>";
//TERNARY IF
$_rakam = 13;
$_sonuc = $_rakam >= 10 ? 14 : 20;
// ===
/*
if($_rakam >= 10){
    $_sonuc = 14;
}else{
    $_sonuc = 20;
}
*/
echo $_sonuc;

echo "<hr>";

//Sabit değerlere $ işareti eklenmeden ulaşılır.
define("PI_SAYISI",3.14);
echo PI_SAYISI;
echo "<hr>";
//Switch
$_renk = "mavi";
switch ($_renk) {
    case 'kırmızı':
        echo "Kırmızı karakter yorumu";
        break;
    case 'mavi':
        echo "mavi renk karakter yorumu";
    case 'sarı':
        echo "sarı renk karakter yorumu";
        break;
    default:
        echo "Renk belirtilmedi";
        break;
}
echo "<hr>";
//Döngüler
$_ulkeler = array(
    "Türkiye"=>"Ankara",
    "İngiltere"=>"Londra",
    "Almanya"=>"Berlin",
    "Rusya"=>"Moskova");
//ekran çıktısı ne olur?
foreach ($_ulkeler as $_ulke => $_baskent) {
    if($_ulke === "Almanya"){continue;}
    if($_ulke === "Rusya"){break;}
    echo $_baskent."<br>";
}
echo "<hr>";

//do while
$_n=1;
do {
    echo "do while loop". $_n."<br>";
}while ($_n>2);

while($_n>2){
    echo "while loop: ". $_n."<br>";
}
echo "<hr>";

//Fonksiyonlar
function fonksiyon_kare($_sayi=10){
    if($_sayi > 100) {return null;}
    return $_sayi * $_sayi;
}

echo var_dump(fonksiyon_kare(101));
echo "<hr>";
echo fonksiyon_kare();



 ?>
