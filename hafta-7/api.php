<?php 

require "func.php"; // veya include.php

$_r = $_POST["q1"];


echo $_r;

// Fonksiyonel programlama

$_alan = daire_alan($_r);

$_cevre = daire_cevre($_r);


echo "<br> Alan: {$_alan}, Çevre:{$_cevre}";

// Nesneye yönelik programlama ile

include "oop.php";

$daire1 = new Daire();

$_alan = $daire1 -> daire_alan($_r);
$_cevre = $daire1 -> daire_cevre($_r);

echo "<br> Alan: {$_alan}, Çevre:{$_cevre}";

echo "<br> PI değeri ".$daire1->_PI." olarak alınmıştır.";

 ?>