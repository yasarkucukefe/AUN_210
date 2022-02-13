<?php 

$_liste = array("Ahmet"=>12,"Mehmet"=>20, "Ayşe"=>32, "Elif"=>21);
$_isim = "Cem";
$_yas = array_key_exists($_isim, $_liste) ? $_liste[$_isim] : "0";
echo $_yas + 1;


 ?>
