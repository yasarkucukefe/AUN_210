<?php 

$_isim = $_POST["q1"];
$_email = $_POST["q2"];
$_sifre1 = $_POST["q3"];
$_sifre2 = $_POST["q4"];

//echo $_isim." ".$_email." ".$_sifre1." ".$_sifre2;

if ($_sifre1 !== $_sifre2){die("Şifreler farklı!");}

//$encrypted_sifre = encrypt_sifre($_sifre1);
$encrypted_sifre = password_hash($_sifre1, PASSWORD_DEFAULT);

$_arr = ["isim"=>$_isim, "email"=>$_email, "sifre"=>$encrypted_sifre];

//echo json_encode($_arr);

$dosya = fopen("users.txt","a") or die("dosya hatası.");

fwrite($dosya, json_encode($_arr)."\n");

fclose($dosya);

echo "Hesabınız oluşturuldu.";




function encrypt_sifre($_sifre){
	// Store the cipher method
	$ciphering = "AES-128-CTR";
	 
	// Use OpenSSl Encryption method
	$iv_length = openssl_cipher_iv_length($ciphering);
	$options = 0;
	 
	// Non-NULL Initialization Vector for encryption
	$encryption_iv = '1234567891011121';
	 
	// Store the encryption key
	$encryption_key = "AUN210Dersi";
	 
	// Use openssl_encrypt() function to encrypt the data
	$encryption = openssl_encrypt($_sifre, $ciphering,
	            $encryption_key, $options, $encryption_iv);
	 
	// Display the encrypted string
	return $encryption;
}



 ?>