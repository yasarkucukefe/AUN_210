<?php 

echo date("Y-m-d"); // 2024-03-08

echo "<hr>";

echo date("d.m.Y");

echo "<hr> İçinde bulunduğumuz ay ?'ıdır <br>";

$ay_isim = date("F");

echo "{$ay_isim} ayındayız.";

echo "<br> Ayın son günü mü? <br>";

$tarih = strtotime("2024-03-09");
echo date("Y-m-d",$tarih);



 ?>