<?php 

include "pizza.php";


$_pizza = new Pizza();

//malzeme ekle
$_pizza -> malzeme_ekle("Sosis");
$_pizza -> malzeme_ekle("Domates");
$_pizza -> malzeme_ekle("Ananas");

//hamur
$_pizza -> set_hamur_tipi("kalın");

//Pizza boyu
$_pizza -> set_pizza_boyu("orta");

//pizza içeriği
echo $_pizza -> goster_siparis();


 ?>