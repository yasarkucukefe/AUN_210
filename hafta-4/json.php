<?php 

$araclar = [];

$araclar[] = ["model"=>"BMW", "sene"=>2021, "motor"=>"1.6"];
$araclar[] = ["model"=>"Tesla", "sene"=>2024, "motor"=>"100kW"];

echo json_encode($araclar);

echo "<hr>";

$yaslar = '{"Ali":35,"Mehmet":37,"Veli":43}'; // String metodları ile Mehmet'in yaşını bulunuz?

//json_decode
$arr = json_decode($yaslar,true);// PHP array olarak dönüştürür.

var_dump($arr);

$yas = $arr["Mehmet"]; // 35

echo "Mehmet'in yaşı {$yas}'tir.";

// json_decode Object
$obj = json_decode($yaslar); //İkinci arguman boş ise PHP Object

$obj_yas = $obj -> Mehmet; // Object'in değerine erişmek için yöntem.
echo $obj_yas;

 ?>