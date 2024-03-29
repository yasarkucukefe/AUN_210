<?php 

$sifre = "Güçlü şifremiz";
$encrypted_sifre = encrypt_sifre($sifre);
echo $encrypted_sifre;
echo "<br>";
echo decrypt_sifre($encrypted_sifre);

echo "<hr>";
$_sifrele = new EncryptDecrypt();

$encrypted_sifre = $_sifrele -> encrypt_sifre($sifre);
echo $encrypted_sifre;
echo "<br>";
echo $_sifrele ->decrypt_sifre($encrypted_sifre);

class EncryptDecrypt{
	private $_ciphering = "AES-128-CTR";
	private $_iv = '12345678910111216';
	private $_key = "AUN_210Dersi";

	function decrypt_sifre($_sifre){
		// Store the cipher method
		$ciphering = $this->_ciphering;

		//decrypt_iv
		$decryption_iv = $this->_iv;
		$options = 0;
	 
		// Store the decryption key
		$decryption_key = $this->_key;
		 
		// Use openssl_decrypt() function to decrypt the data
		$decryption=openssl_decrypt ($_sifre, $ciphering, 
		        $decryption_key, $options, $decryption_iv);
		 
		// Display the decrypted string
		return $decryption;
	}

	function encrypt_sifre($_sifre){
		// Store the cipher method
		$ciphering = $this->_ciphering;
		 
		// Use OpenSSl Encryption method
		$iv_length = openssl_cipher_iv_length($ciphering);
		$options = 0;
		 
		// Non-NULL Initialization Vector for encryption
		$encryption_iv = $this->_iv;
		 
		// Store the encryption key
		$encryption_key = $this->_key;
		 
		// Use openssl_encrypt() function to encrypt the data
		$encryption = openssl_encrypt($_sifre, $ciphering,
		            $encryption_key, $options, $encryption_iv);
		 
		// Display the encrypted string
		return $encryption;
	}


}


function decrypt_sifre($_sifre){
	// Store the cipher method
	$ciphering = "AES-128-CTR";

	//decrypt_iv
	$decryption_iv = '1234567891011121';
	$options = 0;
 
	// Store the decryption key
	$decryption_key = "AUN210Dersi";
	 
	// Use openssl_decrypt() function to decrypt the data
	$decryption=openssl_decrypt ($_sifre, $ciphering, 
	        $decryption_key, $options, $decryption_iv);
	 
	// Display the decrypted string
	return $decryption;
}

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