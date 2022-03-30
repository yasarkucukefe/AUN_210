<?php 

require "vendor/autoload.php";

use Firebase\JWT\JWT;
use Firebase\JWT\Key;

$_oturum_var = false;

$_cerez = $_COOKIE['YBS210_CEREZ'] ? $_COOKIE['YBS210_CEREZ'] : "-";

if($_cerez === "783jdjadubqse0ridueujdueuudhf"){$_oturum_var=true;}

if($_oturum_var){
    $key = "super_guvenli_anahtar_";
    $jwt = $_COOKIE['JWT_CEREZ'] ? $_COOKIE['JWT_CEREZ'] : "-";
    echo "Kullanıcı içerikleri...";
    $decoded = JWT::decode($jwt, new Key($key, 'HS256'));
    echo json_encode($decoded);
}else{
    echo "<BR>Login sayfasına yönlendir.";
}



 ?>
