<?php 

$toplam = intval($_POST["q1"]);

// <100 => %0
// 0-250 => % 10 (tutar > 100 ise)
// 250-400 => % 20
// 400+ => % 30 indirim

//$toplam = 1000; // 25 + 30 + 180 = 235 TL indirim => 1000 - 235 = 765 TL 

function indirim_hesapla($tutar){

	switch ($tutar){
		case $tutar < 100:
			$indirim = 0;
			break;
		case $tutar < 250:
			$indirim = $tutar * 0.10;
			break;
		case $tutar < 400:
			$indirim = 25 + ($tutar-250) * 0.20;
			break;
		default:
			$indirim = 55 + ($tutar - 400) * 0.30;
	}

	$odenecek = $tutar - $indirim;
	return ["tutar"=>$tutar, "indirim"=>$indirim, "odenecek"=>$odenecek];
}

echo json_encode(indirim_hesapla($toplam));

 ?>