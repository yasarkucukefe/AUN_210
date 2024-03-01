<?php 

$isim = $_GET["isim"]; //$_GET["get parameter (key)"]

$eposta = $_GET['eposta'];

echo "isim:".$isim;
echo "<br>eposta:".$eposta;

$myfile = fopen("users.txt", "w") or die("Unable to open file!");
$yeni_user = $isim." eposta:".$eposta;
fwrite($myfile, $yeni_user);
fclose($myfile);


echo "Yeni kullanıcı hesabı oluşturuldu.";


 ?>