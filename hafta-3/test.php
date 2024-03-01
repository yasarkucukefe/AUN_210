<?php 

$metin = "Ahmet,mehmet,ceyda";

$arr = explode(",", $metin); // ["Ahmet","mehmet","ceyda"]

if(strlen($arr[0])>10){
	
}

foreach ($arr as $isim) {
	echo $isim;
}

 ?>