<?php 

$_post_json = file_get_contents('php://input');
$_array = json_decode($_post_json, true);

$_istek = array_key_exists("q", $_array) ? $_array["q"] : "?";

require "data_db.php";

$_db = new data_db();
$mysqli = $_db -> db_baglan();

$sonuc=[];
//$sonuc["istek"]=$_istek;
switch ($_istek) {
    case 'kontrol':
        $hesap = array_key_exists("h",$_array) ? $_array["h"]:"";
        $sifre = array_key_exists("s",$_array) ? $_array["s"]:"";
        $sonuc["data"]=$_db -> hesap_sifre_kontrol($mysqli, $hesap, $sifre);
        break;
    case 'hesap':
        $id = array_key_exists("id", $_array) ? $_array["id"]:0;
        $sonuc["data"]=$_db -> hesap_bilgilerini_getir($mysqli, $id);
        break; 
    case 'yorumlar':
        $sonuc["data"]=$_db -> yorumlari_getir($mysqli); 
        break;
    default:
        # code...
        break;
}

$_db -> db_baglanti_bitir($mysqli);
echo json_encode($sonuc);

 ?>
