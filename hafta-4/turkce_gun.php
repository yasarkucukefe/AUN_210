<?php 

date_default_timezone_set('UTC');

$tarih = "2024-03-10";

$date = strtotime($tarih);

$week_day = intval(date('N',$date)); // Pazartesi=>1, Salı=>2...
echo $week_day."<br>";


if($week_day === 1){echo "{$tarih} => Pazartesi";}
else if($week_day === 2){echo "{$tarih} => Salı";}
else if($week_day === 3){echo "{$tarih} => Çarşamba";}
else if($week_day === 4){echo "{$tarih} => Perşembe";}
else if($week_day === 5){echo "{$tarih} => Cuma";}
else if($week_day === 6){echo "{$tarih} => Cumartesi";}
else if($week_day === 7){echo "{$tarih} => Pazar";}
else {echo "?";}
 

//Switch
$gun_name = "?";
switch ($week_day) {
	case 1:
		$gun_name = "Pazartesi";
		break;
	case 2:
		$gun_name = "Salı";
		break;
	case 3:
		$gun_name = "Çarşamba";
		break;
	case 4:
		$gun_name = "Perşembe";
		break;
	case 5:
		$gun_name = "Cuma";
		break;
	case 6:
		$gun_name = "Cumartesi";
		break;
	default:
		$gun_name = "Pazar";
		break;
}

echo "<hr> {$tarih} => {$gun_name}";

?>
