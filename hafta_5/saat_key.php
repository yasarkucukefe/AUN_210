<?php 

$bolge = isset($_GET["bolge"]) ? filter_input(INPUT_GET,"bolge"):"Europe";
$sehir = isset($_GET["sehir"]) ? filter_input(INPUT_GET,"sehir"):"Istanbul";
$key = isset($_GET["key"]) ? filter_input(INPUT_GET,"key"):"?";

if($key !== "-99dka982jcadkad9daad3dec"){echo json_encode(array("err"=>"anahtar hatası")); die();}

$time_zone = $bolge."/".$sehir;

date_default_timezone_set($time_zone);

$_tarih = date("d.m.Y"); 
$_zaman = date("h:i:s"); 
$_res = array(
    "zaman" => $_zaman,
    "tarih" => $_tarih,
    "timezone"=>$time_zone
);

echo json_encode($_res);

 ?>
