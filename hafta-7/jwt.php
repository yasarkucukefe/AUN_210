<?php 

require "vendor/autoload.php";

use Firebase\JWT\JWT;
use Firebase\JWT\Key;

$key = "super_guvenli_anahtar_";
$payload = array(
    "ders" => "Sunucu Tarafı Programalama 210",
    "xyz" => "Session_id_vb",
    "iat" => 1356999524,
    "nbf" => 1357000000
);

/**
 * IMPORTANT:
 * You must specify supported algorithms for your application. See
 * https://tools.ietf.org/html/draft-ietf-jose-json-web-algorithms-40
 * for a list of spec-compliant algorithms.
 */
$jwt = JWT::encode($payload, $key, 'HS256');

setcookie("JWT_CEREZ",$jwt);

echo $jwt;

 ?>
