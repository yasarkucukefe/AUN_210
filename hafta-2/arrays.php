<?php 

$arabalar = array("Tesla","TOGG","Mercedes","Jaguar","Volvo");

$meyveler = ["Portakal","Elma","Armu"];

echo  $arabalar[2]. " ".$meyveler[1];
echo "<hr>";
// Array'ler 
$a = [1,2,3,4];
$b = $a;

$a[0] = 9;
//
echo json_encode($b);
echo "<br>";
echo json_encode($a);

echo "<br>PHP'de Array'ler 'değer' olarak kopyalanırlar! JS ve Python'dan farklıdır.";
//
echo "<hr> Bir array'e yeni bir eleman eklemek için:<br>";
$a[] = 5; // Yeni bir eleman eklendi
echo json_encode($a);

array_push($a, 6); // Yeni bir eleman eklendi
echo json_encode($a);

echo "<br> a arrayinde ".count($a)." tane eleman vardır.";

 ?>
