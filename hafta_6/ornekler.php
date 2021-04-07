<?php 

$a = 2;
$b = "2";

//Elma
if($a == $b){echo "Elma";}
else{echo "Portakal";}
echo "<hr>";
//Portakal
if($a === $b){echo "Elma";}
else{echo "Portakal";}

echo "<hr>";
//Elma
$a = 2;
$b = "3";
$c = 5>5;
$d = ($a == $b) === $c;
if($d){echo "Elma";}
else{echo "Portakal";}

//Array'ler
echo "<hr>";
$_mevyeler = array("Elma","Portakal","Karpuz");
$_baska = $_mevyeler;
if($_baska === $_mevyeler){echo "aynı";}
else{echo "farklı";}
//
$_baska[0] = "Üzüm";
if($_baska === $_mevyeler){echo " aynı";}
else{echo " farklı";}

var_dump($_mevyeler);
var_dump($_baska);
//
echo "<hr>";
$_a = 4;
do{
    $_a--;
    if($_a === 3){continue;} // devam kodu çalıştırma ama do while döngüsüne devam et
    if($_a === 1){break;}//do while döngüsünden çık
    echo $_a;
}while($_a>0);

echo "<hr>";
$_liste = ["modeller"=>[1,2,3,[4,2,3,["elma","armut"]]]];
echo $_liste["modeller"][3][1];// 2



 ?>
