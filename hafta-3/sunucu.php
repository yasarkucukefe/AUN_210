<?php 

$get = $_GET["q"];

if(isset($_GET["isim"])){
    $isim = $_GET["isim"];
}else{
    $isim = "bilinmiyor.";
}

$soyad = $_GET["soyad"];

$resp = array("resp"=>[$get,$isim,$soyad]);

echo json_encode($resp);
 ?>

