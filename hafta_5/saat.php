<?php 

$bolge = isset($_GET["bolge"]) ? filter_input(INPUT_GET,"bolge"):"Europe";
$sehir = isset($_GET["sehir"]) ? filter_input(INPUT_GET,"sehir"):"Istanbul";


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
