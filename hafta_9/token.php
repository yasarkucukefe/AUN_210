<?php 

echo "128 rasgele karakterden oluşan bir karakter dizini oluşturmalıyız.<br>";

$_havuz = "0123456789ABCDEFGHIJKLMNOPRSTUVWYZ";

$_kac = 128;
$_token="";
for($i=0;$i<$_kac;$i++){
    $_rand = rand(0,strlen($_havuz)-1);
    $_token = $_token.substr($_havuz, $_rand, 1);
}
echo $_token;

 ?>
