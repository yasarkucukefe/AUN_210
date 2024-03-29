<?php 

$a = "1";
$b = 1;

if($a == $b){
	echo "elma";
}else{
	echo "armut";
}

if($b>1){
	$c=4;
}else{
	$c=2;
}

$c = $b > 1 ? 4 : 2;
echo $c; // ?

echo "<hr>";
//Switch
$a = 5;

switch ($a) {
	case 5:
		echo "merhaba";
	case 6:
		echo " dünya";
		break;
	case 7:
		echo "Good bye";
		break;
	default:
		// code...
		break;
}


echo "<hr>";

$b = 6;

if($b < 10){
	echo "Merhaba";
}else if($b < 9){
	echo " dünya";
}else if ($b < 8){
	echo " good bye";
}else{
	echo " bye";
}

echo "<br>";

$arr = [1,2,3,4,5];

foreach ($arr as $deger) {
	if($deger > 3){continue;}
	echo $deger. " ";
}


echo "<hr>";
$i = 0;
while($i<5){
	echo $i;
	$i++;
}


$i = 10;

do{
	$i++;
}while($i<9);

echo "<br>".$i;

echo "<hr>";

function hesapla($a,$b,$c=3){
	return $a + $b + $c;
}

hesapla(1,2,5);// 8
hesapla(3,4);//

// try catch

$a=2;

//echo $a * $olmayan_deger;

try{
	$b = $a * $olmayan_deger;
}catch (Exception $e){
	echo "olmayan_deger tanımlı değil!";
	echo $e;
}


function divide($dividend, $divisor) {
  return $dividend / $divisor;
}

try {
	echo divide(5, 0);
} catch(Exception $e) {
  echo "Unable to divide. ";
} finally {
  echo "Process complete.";
}

 ?>