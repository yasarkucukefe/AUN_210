<?php 

$_eposta = $_POST["q1"] ? $_POST["q1"] : "?";
$_isim = $_POST["q2"] ? $_POST["q2"] : "?";
$_sifre = $_POST['q3'] ? $_POST['q3'] : "?";

// Kayıt işlemleri...
if(yeni_kullanici_olustur($_eposta, $_isim, $_sifre)){
    header("Location: anasayfa.html");
}else{
    header("Location: hata.html");
}



function yeni_kullanici_olustur($_eposta,$_isim,$_sifre){
    if(is_valid_email($_eposta)){
        if(tercih_edilmeyen_eposta_adresi_mi($_eposta)){return false;}
        echo "tercih ok";
        if(sifre_karakter_ok($_sifre)){
            return true;
        }
        return false;
    }
    return false;
}

function sifre_karakter_ok($_sifre){
    if(strlen($_sifre) < 8 || strlen($_sifre) > 16) {return false;}
    return true;
}

function tercih_edilmeyen_eposta_adresi_mi($_eposta){
    $_istenmeyenler = ["gmail.com","hotmail.com","outlook.com"];
    $_arr = explode("@", $_eposta);
    if(count($_arr) !== 2) {return false;}
    $_mail_uzantisi = strtolower($_arr[1]) ;
    if(in_array($_mail_uzantisi, $_istenmeyenler)){return true;}
    return false;
}

function is_valid_email($_eposta){
    return filter_var($_eposta, FILTER_VALIDATE_EMAIL);
}

//ternary if
/*
$a=2;
if($a > 3){
    $b = 1;
}else{
    $b = 4;
}
$b = $a > 3 ? 1 : 4;
*/


 ?>
