<?php 

echo "Dosya yükleme sayfası:<hr>";

$dosya_name = basename($_FILES["file"]["name"]);

echo json_encode($_FILES["file"]);

$arr = explode(".", $dosya_name);

$extension = strtoupper($arr[count($arr)-1]);

$izinli_dosya_tipleri = ["JPG","PNG","PDF"];


//File size kontrol
if($_FILES["file"]["size"]>1000000){
	die("<br><br>Dosya boyutu çok büyük. ".$_FILES["file"]["size"]);
}

//Dosya uzantısı
if(in_array($extension, $izinli_dosya_tipleri) === false){
	die("<br> Bu dosya türünün yüklenmesini yapapıyorum.".$extension);
}

//Dosya mevcut mu?
if(file_exists($dosya_name)){
	die("<br>Aynı isimde bir dosya zaten mevcut.");
}

if(move_uploaded_file($_FILES["file"]["tmp_name"], $dosya_name)){
	echo "<hr> Dosya başarıyla yüklendi.";
}else{
	echo "<hr>Bilinmeyen bir hata nedeniyle dosya yüklenemedi.";
}

;



 ?>