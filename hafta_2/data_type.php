<?php 

//DEĞİŞKEN TÜRLERİ

//String
$_dt = "Merhaba".' Dünya';
echo 'değişken değeri {$_dt}';//değişken değeri {$_dt}
echo "<hr>";
echo "değişken değeri {$_dt}";//değişken değeri Merhaba Dünya
echo "<hr>";
var_dump($_dt);
//Tamsayılar
$_a = 12;
$_b = 25;
// -2,147,483,648 ve 2,147,483,648 arasında olabilir
echo "<hr>";
//var_dump(degisken_adı)
var_dump($_a); //int(12)
echo "<hr>";
//ondalık sayılar
$_c = 10.92301;
var_dump($_c);
echo "<hr>";

//Boolean (Doğru - Yanlış)
$_d = true;
$_f = false;
var_dump($_d,$_f);
echo "<hr>";

//Array
$_arabalar = ["Volvo", "Ford", "Tesla", "Fiat", "TOGG"];
$_arabalar = array("Volvo", "Ford", "Tesla", "Fiat", "TOGG");
$_liste = ["Elma", 12, true, 10.12,["A","B","C"]];
var_dump($_liste);
echo "<hr>";

$_fiyatlar = ["kalem"=>12,"postit"=>25,"kagitlar"=>["a4"=>14,"a3"=>23]];
var_dump($_fiyatlar);
var_dump($_fiyatlar["kagitlar"]);
echo "<hr>";
echo json_encode($_fiyatlar["kagitlar"]);
echo "<hr>";
//
echo $_arabalar[0];
echo "<hr>";
echo json_encode($_fiyatlar[0]);//anahtar (key) tanımlı liste elemanları index numarası ile adreslenemez.
//
echo "<hr>";
$_liste = ["ybs210"=>"Sunucu tarafı programlama","ybs108"=>"Script temelli diller","ybs112"=>"Veri tabanı uygulamaları","ybs306"=>"Programlama 2"];
//foreach($_array_adi as $_anahtar_adi => $_deger_adi){}
foreach ($_liste as $_anahtar => $_deger) {
    echo $_deger;
    echo "<br>";
}
echo "<hr>";

//Nesne (Object)
class Araba {
    public $_renk;
    public $_model;
}
$_arabam = new Araba();
var_dump($_arabam);
echo "<hr>";

//null
$_bos = null;
$_yas = 20;
if($_yas > 18){
    $_izin = TRUE;
    $_bos = 1;
}
if(is_null($_bos)){
    echo "izin verilmedi.";
}else{
    echo "İzin verildi";
}
echo "<hr>";
var_dump($_bos);


echo "<br><br><br><br><br><br><br><br><br><br><br>";
echo "<br><br><br><br><br><br><br><br><br><br><br>";
 ?>
