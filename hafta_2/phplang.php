<?php 

// bu bir yorumdur

/*
Birden fazla
satır için yorum
*/

$_araba = "Nissan";
$_sene = 2022;

$_meyve1 = "elma";
$_meyve2 = "portakal";
$_meyveler = $_meyve1.",".$_meyve2;

$meyveler = "{$_meyve1}, {$_meyve2}";

//echo $meyveler;

$_array = ["elma","portakal",1];

//var_dump($_array);

//echo json_encode($_array);

//print_r($_array);


$_arr = array("meyveler"=>$_array, "arabalar"=>["Nissan","BMW"]);

//echo json_encode($_arr)

//echo 1 + "2";
/*
$metin = "Elma, portakal, kivi, armut";
$ara = "Erik";
echo strpos($metin,$ara);
if(strpos($metin, $ara) !== false){
    echo "{$ara} listede mevcut";
}else{
    echo "{$ara} listede yok.";
}
 */

/*
// switch
$_rakam = 3;
switch($_rakam){
    case 0: 
        echo "Sıfır";
        break;
    case 1:
        echo "Bir";
        break;
    case 2:
        echo "İki";
        break;
    case 3:
        echo "Üç";
        break;
    case 4:
    case 5:
    case 6:
        echo "Çok";
        break;
    default:
        echo "Bilemedim";
}
*/

//while
$_rakam=0;
while($_rakam < 10){
    echo $_rakam.",";
    $_rakam++;
}
echo "<hr>";

for($i=0;$i<10;$i++){
    echo $i.",";
}
echo "<hr>";

$my_arr = [0,1,2,3,4,5,6,7,8,9];
foreach ($my_arr as $rakam) {
    echo $rakam.",";
}
echo "<hr>";

$i=0;
do{
    echo $i.",";
    $i++;
}while($i<10);

echo "<br>";
$my_arr = [0,1,2,3,4,5,6,7,8,9];
foreach ($my_arr as $rakam) {
    if ($rakam % 2 === 1){
        echo "{$rakam} => tek sayı <br>";
    }
}

echo "<br>";
$my_arr = [0,1,2,3,4,5,6,7,8,9];
foreach ($my_arr as $rakam) {
    if ($rakam % 2 === 0){
        continue;
    }
    echo "{$rakam} => tek sayı <br>";
}


echo "<hr>";
$rakam = 0;
while ($rakam>=0){
    if($rakam > 10){break;}
    if($rakam % 2 === 1){
        echo "{$rakam} => tek sayı <br>";
    }
    $rakam++;
}

// returns true for odd number
function tekMiCiftMi($sayi){
    if($sayi % 2 === 1) {
        return true;
    }else{
        return false;
    }
}

function tekMiCiftMi2($sayi){
    if($sayi % 2 === 1) {
        return true;
    }
    return false;
}

function tekMiCiftMi3($sayi){
    return $sayi % 2 === 1;
}

echo "<hr> Function <br>";
$rakam = 0;
while ($rakam>=0){
    if($rakam > 10){break;}
    if(tekMiCiftMi3($rakam)){
        echo "{$rakam} => tek sayı <br>";
    }
    $rakam++;
}

function kareAlanHesapla($kenar=1){
    return $kenar * $kenar;
}
echo "<hr>";
echo kareAlanHesapla();


$deger = 1;
echo "<hr>";

if($deger === "1"){
    echo "== doğru";
}else{
    echo "== yanlış";
}

echo "<hr>";

$a = 2 == "2" || false;

echo $a;

 ?>
