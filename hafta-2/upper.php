<?php 

$isim = "Yasar Kucukefe Elvan";
echo $isim."<br>";
$array = explode(" ", $isim);



$isim =  $array[0];
//$soyisim = $array[count($array)-1];// $soyisim = end($array);

$soyisim = array_pop($array); // Array'in son elemanı remove edildi

$isim = implode(" ", $array);

echo json_encode($array);
echo "<br>";
echo  $isim." ".strtoupper($soyisim);


 ?>
