<?php 

if(empty($_POST["q1"])){
	die("isim POST parametresi zorunludur.");
}

if(empty($_POST["q2"])){
	die("Okul no zorunludur.");
}

if(empty($_POST["q3"])){
	die("Cevap zorunludur.");
}

// İsim kontrolü
$q1 = $_POST["q1"]; //$_POST["get parameter (key)"]
$q2 = $_POST["q2"]; //$_POST["get parameter (key)"]
$q3 = $_POST["q3"]; //$_POST["get parameter (key)"]

// dosya yazma aşaması


$myfile = fopen("quiz.txt", "a") or die("Unable to open file!");
$record = $q1." (".$q2."). Cevap: {$q3} /n";
fwrite($myfile, $record);
fclose($myfile);


echo "Cevabınız kayıt edildir.";

 ?>