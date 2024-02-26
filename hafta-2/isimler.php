<?php 

$_user = 12345;

$_yetkili = false;

if($_user == 12345) {
    $_yetkili = true;
}


if($_yetkili){
    echo "Yetkili";
}else{
    echo "Yetki yok";
    die("<br>Sonlandır");
}

//Dosya okuma
$dosy_path = "C://dersler/isimler.txt";
$myfile = fopen($dosy_path, "r") or die("Unable to open file!");
echo fread($myfile,filesize($dosy_path));
fclose($myfile);

//
// TXT dosyasını satır satır okumak gerekiyor:
echo "<hr>";
$dosy_path = "C://dersler/isimler.txt";
$handle = fopen($dosy_path, "r");
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

 ?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
</head>
<body>
    <?php 
        array_shift($isimler);// Array'in ilk elemanını sil 
        echo "Toplam sayı: ".count( $isimler)."<br>";
        echo "<ol>";
        for($i=0; $i<count($isimler); $i++){
            $isim = $isimler[$i];
            echo "<li>".soyisimUpper($isim)."</li>"; 
        }
        echo "/<ol>";
     ?>
    
</body>
</html>
