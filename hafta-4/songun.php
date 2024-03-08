<?php 

$tarih = "2024-03-42";

function ayin_son_gunu_mu($tarih){
	$date = strtotime($tarih);
	$sonraki_gun = strtotime($tarih." +1 days");

	$date_ay = date("m",$date);
	$sonraki_gun_ay = date("m",$sonraki_gun);

	$ay_son_gun = $date_ay === $sonraki_gun_ay ? false : true;

	if($ay_son_gun){return true;}
	else{return false;}
}


function ayin_son_gunu_mu_yontem_2($tarih){
	$date = strtotime($tarih);
	$son_gun = date("Y-m-t",$date);
	$ymd = date("Y-m-d",$date);

	$ay_son_gun = $son_gun === $ymd ? true : false;

	if($ay_son_gun){return true;}
	else{return false;}
}


echo "<br>";
if(ayin_son_gunu_mu($tarih)){
	echo "{$tarih} içinde bulunduğu ayın son günüdür.";
}else{
	echo "{$tarih} içinde bulunduğu ayın son günü değildir.";
}

echo "<hr>Yöntem-2<br>";
if(ayin_son_gunu_mu_yontem_2($tarih)){
	echo "{$tarih} içinde bulunduğu ayın son günüdür.";
}else{
	echo "{$tarih} içinde bulunduğu ayın son günü değildir.";
}

 ?>