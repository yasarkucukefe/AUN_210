<?php 

$dosy_path = "isimler.txt";
$handle = fopen($dosy_path, "r");
$resp = [];
$isimler = [];// veya $isimler = array();
if ($handle) {
    while (($line = fgets($handle)) !== false) {
        //echo $line."<br>";
        $isimler[] = $line;
    }
    fclose($handle);
}

function soyisimUpper($isimSoyisim){
    $array = explode(" ", $isimSoyisim);
    $soyisim = array_pop($array);
    $isim = implode(" ", $array);
    return $isim." ".strtoupper($soyisim); 
}

$resp["say"] = count($isimler);
$resp["data"] = $isimler;

echo json_encode($resp);

 ?>