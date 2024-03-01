<?php 

if(empty($_POST["isim"])){
	die("isim POST parametresi zorunludur.");
}

if(empty($_POST["eposta"])){
	die("eposta POST parametresi zorunludur.");
}


// İsim kontrolü
$isim = $_POST["isim"]; //$_POST["get parameter (key)"]

$arr = explode(" ", $isim); // İsim Soyisim
if(count($arr)<2 && count($arr)>4){
	die("Lütfen isim ve soyisim giriniz.");
}

foreach ($arr as $txt) {
	if(strlen($txt)>50){
		die("İsim karakter sayısı en fazla 50 olabilir.");
	}
}

if(strlen($isim)<2){
	die("isim karakter sayısı 2'den az olamaz");
}



// Eposta kontrolü
$eposta = $_POST['eposta'];

if(strlen($eposta)<3){
	die("Lütfen geçerli bir eposta adresi giriniz.");
}

//@ var mı?
if(strpos($eposta, "@") !== false){
	// @ var
}else{
	die("Lütfen geçerli bir eposta adresi giriniz.");
}

// birden fazla @
$arr = explode("@", $eposta);
if(count($arr)!==2){
	die("Lütfen geçerli bir eposta adresi giriniz.");
}


// tek komut ile email validation

if(filter_var($eposta, FILTER_VALIDATE_EMAIL)){
	//geçerli eposta adresi
}else{
	die("Lütfen geçerli bir eposta adresi giriniz.");
}

// dosya yazma aşaması

echo "isim:".$isim;
echo "<br>eposta:".$eposta;

$myfile = fopen("users.txt", "a") or die("Unable to open file!");
$yeni_user = $isim." eposta:".$eposta."\n";
fwrite($myfile, $yeni_user);
fclose($myfile);


echo "Yeni kullanıcı hesabı oluşturuldu.";


 ?>