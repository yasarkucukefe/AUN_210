<?php 

$_post_json = file_get_contents('php://input');
$_array = json_decode($_post_json, true);

$_istek = array_key_exists("q", $_array) ? $_array["q"] : "istek belirtilmedi.";

require "veri_db.php";
$_db = new veri_db();

$mysqli = $_db -> db_baglan();

$sonuc["istek"] = $_istek;
switch ($_istek) {
    case 'ulkeler':
        $sonuc["data"]=$_db -> ulke_listesi($mysqli);
        break;
    case 'sehirler':
        $ulke_kodu = array_key_exists("ulke", $_array) ? $_array["ulke"] : "_?_"; 
        $sonuc["data"]=$_db -> sehir_listesi($mysqli, $ulke_kodu);
        break;
    case 'diller':
        $ulke_kodu = array_key_exists("ulke", $_array) ? $_array["ulke"] : "_?_"; 
        $sonuc["data"]=$_db -> dil_listesi($mysqli, $ulke_kodu);
        break;    
    default:
        //echo "İstek belirtilmedi.";
        break;
}

$_db ->db_baglanti_bitir($mysqli);

echo json_encode($sonuc);

 ?>
