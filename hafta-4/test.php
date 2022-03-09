<?php 

$_eposta = "yasar_OUTLOOK.COM";

$_istenmeyenler = ["gmail.com","hotmail.com","outlook.com","yahoo.com"];

$_arr = explode("@", $_eposta);

if(count($_arr) !== 2) {exit("Hatalı e-posta adresi");}

$_mail_uzantisi = strtolower($_arr[1]) ;

if(in_array($_mail_uzantisi, $_istenmeyenler)){
    echo "Tercih edilmeyen e-posta adresi";
}else{
    echo "Kayıt yapılabilir";
}


 ?>
