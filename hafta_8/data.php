<?php 

$_post_json = file_get_contents('php://input');
$_array = json_decode($_post_json, true);

$_istek = array_key_exists("q", $_array) ? $_array["q"] : "?";

require "data_db.php";

$_db = new data_db();
$mysqli = $_db -> db_baglan();

$sonuc=[];
switch ($_istek) {
    case 'kontrol':
        $hesap = array_key_exists("h",$_array) ? $_array["h"]:"";
        $sifre = array_key_exists("s",$_array) ? $_array["s"]:"";
        $sonuc["data"]=$_db -> hesap_sifre_kontrol($mysqli, $hesap, $sifre);
        break;
    
    default:
        # code...
        break;
}

$_db -> db_baglanti_bitir($mysqli);
echo json_encode($sonuc);

 ?>
