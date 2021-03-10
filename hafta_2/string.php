<?php 
//Karakter dizinleri için PHP fonksiyonlarımız

$_metin = "Sunucu tarafı programlama";

echo strlen($_metin);//strlen() bir karakter dizinin karakter sayısını bulur
echo "<hr>";

echo str_word_count($_metin); //str_word_count() kaç kelimeden oluştuğunu bulur
echo "<hr>";
echo json_encode(str_word_count($_metin,2));

echo "<hr>";
echo strrev($_metin);

echo "<hr>";
//strpos($_dizin,$_aranacak_metin)
echo strpos($_metin,"program");
echo "<hr>";
if(strpos($_metin,"prog") >= 0){
    echo "prog içeren kelime mevcuttur.";
}else{
    echo "prog içeren kelime bulunmuyor.";
}

echo "<hr>";
//echo strpos($_metin,"Sunucu");
if(strpos($_metin,"Sunucu") >= 0){
    echo "Sunucu içeren kelime mevcuttur.";
}else{
    echo "Sunucu içeren kelime bulunmuyor.";
}

$_liste = ["ybs210"=>"Sunucu tarafı programlama","ybs108"=>"Script temelli diller","ybs112"=>"Veri tabanı uygulamaları","ybs306"=>"Programlama 2"];
echo "<hr>";

$_ara = "Sunucu";
foreach ($_liste as $_kod => $_ders) {
    //echo $_kod." => ".$_ders." ".strpos($_ders,$_ara);
    //var_dump(strpos($_ders,$_ara));
    //echo "<br>";
    $pos = strpos($_ders,$_ara);
    if($pos === false){
        echo "mevcut değil.";        
    }else{
        echo $_kod." dersinde {$_ara} karakter dizini mevcuttur. $_ders";
        echo "<br>";
    }
    echo "<hr>";
}

echo "<hr>";
$_ara = "prog";
foreach ($_liste as $_kod => $_ders) {
    //echo $_kod." => ".$_ders." ".strpos($_ders,$_ara);
    //var_dump(strpos($_ders,$_ara));
    //echo "<br>";
    $pos = strpos(strtolower($_ders),strtolower($_ara));
    if($pos === false){
        echo "mevcut değil.";        
    }else{
        echo $_kod." dersinde {$_ara} karakter dizini mevcuttur. $_ders";
        echo "<br>";
    }
    echo "<hr>";
}

echo "<hr> str_contains fonksiyonumuz ile:<br>";
$_ara = "prog";
foreach ($_liste as $_kod => $_ders) {
    if(str_contains($_ders,$_ara)){
        echo $_kod." dersinde {$_ara} karakter dizini mevcuttur. $_ders";
        echo "<br>";
    }else{
        echo "mevcut değil."; 
    }
    echo "<hr>";
}

function str_contains($_metin,$_ara){
    $pos = strpos(strtolower($_metin),strtolower($_ara));
    if($pos === false) {return false;}
    return true;
}

echo "<hr>";

$_eski_metin = "Script temelleri diller";
$_yeni_metin = str_replace("temelleri", "temelli", $_eski_metin);
echo "eski => ".$_eski_metin."<br>";
echo "yeni => ".$_yeni_metin;

echo "<hr>";
$_metin = "ybs210 dersinde Sunucu karakter dizini mevcuttur. Sunucu tarafı programlama";
echo substr($_metin, 10, 5);
echo "<hr>";
echo substr($_metin, -11);
echo "<hr>";
$_metin = "ybs210_dersinde_Sunucu_karakter_dizini mevcuttur._Sunucu_tarafı_programlama";
echo $_metin."<br>";
$_arr = explode("_", $_metin);
var_dump($_arr);
echo "<hr>";
$_yeni_metin = implode("*", $_arr);
echo $_yeni_metin;
echo "<hr>";
echo "<hr>";
echo "<hr>";
echo "<hr>";
echo "<hr>";





 ?>
