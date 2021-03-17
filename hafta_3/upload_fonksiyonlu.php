<?php 

$_sifre = filter_input(INPUT_POST, "pass");
if($_sifre !== "super_guvenli_sifre"){exit("Hatalı şifre");}
$_dosya_yok = !isset($_FILES["dosya"]);
if($_dosya_yok){exit("Upload edilecek dosya mevcut değil.");}

//Dosya yükleme kısıtlamaları
// 1. dosya türü sadece jpg png
// 2. dosya büyüklüğü en fazla 1MB olabilir.

//Dosya büyüklüğü kontrolü
$_dosya_boyutu = $_FILES["dosya"]["size"];
if(dosya_boyutu_uygun($_dosya_boyutu)){exit("Dosya boyutu > {$_boyut_limiti}");}

//Dosya türü kontrolü
$_dosya_adi = $_FILES["dosya"]["name"];
echo $_dosya_adi;
echo "<br>";
if(dosya_izinli_mi($_dosya_adi)){exit("Dosya uzantısı uygun değil.");}
//echo var_dump($_FILES["dosya"]);
//echo "Dosya yükleme işlemleri PHP sayfası"
$_hedef_konum = "upload/".$_FILES["dosya"]["name"];
if(dosya_yukle($_FILES["dosya"]["tmp_name"], $_hedef_konum)){echo "Dosya başarı ile yüklendi.";}
else{echo "Dosya yüklenemedi.";}

function dosya_yukle($_kaynak,$_hedef){
    return move_uploaded_file($_kaynak,$_hedef);
}

function dosya_boyutu_uygun($_dosya_boyutu){
    $_boyut_limiti = 200000; //byte
    return $_dosya_boyutu > $_boyut_limiti;
}

function dosya_izinli_mi($_dosya_adi){
    $_izinli_dosyalar = ["png","PNG","jpg","JPG","jpeg","JPEG"];
    $_uzt = end(explode(".",$_dosya_adi));
    return !in_array($_uzt, $_izinli_dosyalar);  
}


 ?>
