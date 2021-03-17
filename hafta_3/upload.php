<?php 

$_sifre = filter_input(INPUT_POST, "pass");
if($_sifre !== "super_guvenli_sifre"){exit("Hatalı şifre");}
$_dosya_yok = !isset($_FILES["dosya"]);
if($_dosya_yok){exit("Upload edilecek dosya mevcut değil.");}

//Dosya yükleme kısıtlamaları
// 1. dosya türü sadece jpg png
// 2. dosya büyüklüğü en fazla 1MB olabilir.

//Dosya büyüklüğü kontrolü
$_boyut_limiti = 200000; //byte
$_dosya_boyutu = $_FILES["dosya"]["size"];
//echo "Dosya boyutu: {$_dosya_boyutu}"."<br>";
if($_dosya_boyutu > $_boyut_limiti){exit("Dosya boyutu > {$_boyut_limiti}");}

//Dosya türü kontrolü
$_dosya_adi = $_FILES["dosya"]["name"];
echo $_dosya_adi;
echo "<br>";

$_izinli_dosyalar = ["png","PNG","jpg","JPG","jpeg","JPEG"];
$_uzt = end(explode(".",$_dosya_adi));
if(!in_array($_uzt, $_izinli_dosyalar)){exit("Dosya uzantısı uygun değil.");}

//echo var_dump($_FILES["dosya"]);
//echo "Dosya yükleme işlemleri PHP sayfası"

$_hedef_konum = "upload/".$_FILES["dosya"]["name"];

$_sonuc = move_uploaded_file($_FILES["dosya"]["tmp_name"], $_hedef_konum);
echo "<br>";
if($_sonuc){echo "Dosya başarı ile yüklendi.";}
else{echo "Dosya yüklenemedi.";}




 ?>
