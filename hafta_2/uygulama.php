<?php 

$_arr = array("il"=>"İstanbul","ilceler"=>array("Kadıköy","Beşiktaş","Esenler","Sarıyer"));
//Sarıyer çıktısı için ne yazmalız?
echo $_arr["ilceler"][3];
echo "<hr>";

//Bir array'ye yeni elemanlar eklemek mümkündür.
$_arr[] = "Ankara";
$_arr[] = array("İzmir");
array_push($_arr, "Adana");
var_dump($_arr);
echo $_arr[0];
echo "<hr>";
//
$_liste = ["ybs210"=>"Sunucu tarafı programlama","ybs108"=>"Script temelli diller","ybs112"=>"Veri tabanı uygulamaları","ybs306"=>"Programlama 2"];
$_kod_ders = "ybs210";
if(array_key_exists($_kod_ders, $_liste)){
    echo $_liste[$_kod_ders];
}else{
    echo $_kod_ders. " mevcut değil";
}
echo "<hr>";

//boolean
$_b = 5;
$_c = 5;
$_d = $_b === $_c;
var_dump($_d) ;

echo "<hr>";
$_deger = "elma";
echo "<hr>";

echo "=== durumu => ";
echo var_dump($_deger === 0);
echo "<br>== durumu => ";
echo var_dump($_deger == 0);
echo "<hr>";

//String
$_haber = "After ascending to the top Senate job during the assault on the Capitol, Mr. Schumer faces a different kind of challenge: steering President Biden’s agenda with no margin for error.";

echo $_haber;
echo "<hr>";
echo str_word_count($_haber)." kelime bulunuyor.";
echo "<hr>";

// Metinde kaç tane "A" harfi ile başlayan kelime bulunuyor?
// Metinde kaç tane kelime "t" harfi ile bitiyor?
$_kelimeler = str_word_count($_haber,1);
foreach ($_kelimeler as $_kelime) {
    //echo $_kelime."<br>";
    $_ilk = $_kelime[0];
    $_son = $_kelime[strlen($_kelime)-1];
    if($_ilk === "A"){echo $_kelime."<br>";}
    if($_son === "t"){echo $_kelime."<br>";}
}


var_dump(str_contains($_haber,"After"));

function str_contains($_metin,$_ara){
    $pos = strpos(strtolower($_metin),strtolower($_ara));
    if($pos === false) {return false;}
    return true;
}

 ?>
