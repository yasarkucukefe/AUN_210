<?php 

$_sifre= "Süper güçlü şifremiz";

echo $_sifre."<br>";

$_hash = password_hash($_sifre, PASSWORD_DEFAULT);

echo $_hash;
echo "<hr>";

$_user_input = "Süper güçlü şifremiz";

echo $_user_input. " <hr>";
if(password_verify($_user_input, $_hash)){
	echo "Şifre doğru";
}else{
	die("Hatalı şifre");
}

 ?>