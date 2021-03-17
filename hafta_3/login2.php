<?php 

$_username = filter_input(INPUT_POST, "u");
$_sifre = filter_input(INPUT_POST, "p");
$_token = filter_input(INPUT_POST, "t");

echo $_username;

//kullanıcı hesaplarının olduğu array username => sifre
$_hesaplar = ["username" => "sifre", "yasarkucukefe"=>"12345", "ahmetdurak" => "9182djdhs"];


echo "Login İşlemi PHP dosyası"."<br>";

echo "kullanıcı adı: {$_username} <br>";
echo "şifre: {$_sifre}";

echo "<hr>";

if(array_key_exists($_username, $_hesaplar)){
    $_user_pass = $_hesaplar[$_username];
    if($_sifre === $_user_pass){
        echo "Login başarılı.";
    }else{
        echo "Hatalı şifre.";
    }
    //echo "Kullanıcı mevcut ve mevcut şifresi: {$_user_pass}";
}else{
    echo ("Kullanıcı hesabı ({$_username}) tanımlı değil.");
}

 ?>
