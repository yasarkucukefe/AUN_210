<?php 

$_email = strtolower($_POST["q1"]);
$_sifre = $_POST["q2"];


echo $_email. " ? ".$_sifre. "<hr>";

if ($file = fopen("users.txt", "r")) {
    while(!feof($file)) {
        $line = fgets($file);

        if(strlen($line)<2){continue;}

        $arr = json_decode($line, true); //true: Array oluştur
        //echo "<hr>";
        //echo json_encode($arr);

        $user_email = strtolower($arr["email"]);

        //$user_sifre = decrypt_sifre($arr["sifre"]);
        $hashed_sifre = $arr["sifre"];


       

        if($_email === $user_email){//Sifre kontrolünü yap
        	 echo $user_email."=>".$hashed_sifre." input pass:".$_sifre."\n";

        	if(password_verify($_sifre, $hashed_sifre)){//Sifre doğru
        		echo "Doğru kullanıcı adı ve şifre => Sisteme giriş yap";	
        	}else{
        		die("Hatalı şifre");
        	}
        	/*
        	if($_sifre === $user_sifre){//Sifre doğru
        		echo "Doğru kullanıcı adı ve şifre => Sisteme giriş yap";	
        	}else{
        		die("Hatalı şifre");
        	}
        	*/
        	break;
        }

        //echo $line;
    }
    fclose($file);
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


 ?>