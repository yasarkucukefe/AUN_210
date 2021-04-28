<?php 

$_sifre = "abcdef";
$_hash = password_hash($_sifre, PASSWORD_DEFAULT);

echo $_sifre;
echo " => ";
echo $_hash;

$_saglanan_sifre = "123456";

echo "<hr>";
if(password_verify($_saglanan_sifre, $_hash)){
    echo "doğru şifre";
}else{
    echo "yanlış şifre";
}



 ?>
