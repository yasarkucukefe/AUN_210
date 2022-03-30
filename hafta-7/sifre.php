<?php   

$_input= $_GET["p"];

//$_sifre="123456";

/*
if($_input === $_sifre){
    echo "Doğru şifre";
}else{
    echo "Hatalı şifre";
}
*/



//$_hash = password_hash($_sifre, PASSWORD_DEFAULT);

$_hash = "$2y$10$1KrAQAsYdFbnjmCRCCEzJOt2pyi0zi7wqZDqJyXIb71Z3girLHGZu";

//echo $_hash;

if(password_verify($_input, $_hash)){
    echo "Şifre doğru";
    setcookie("YBS210_CEREZ","783jdjadubqse0ridueujdueuudhf");
}else{
    exit;
}



 ?>
