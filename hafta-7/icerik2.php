<?php 

$_oturum_var = false;

$_cerez = $_COOKIE['YBS210_CEREZ'] ? $_COOKIE['YBS210_CEREZ'] : "-";

if($_cerez === "783jdjadubqse0ridueujdueuudhf"){$_oturum_var=true;}

if($_oturum_var){
    echo "Kullanıcı içerikleri...Farklı-2";
}else{
    echo "Login sayfasına yönlendir.";
}



 ?>
