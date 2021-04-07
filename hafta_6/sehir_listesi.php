<?php 

$ulke_kodu = isset($_GET["kod"]) ? filter_input(INPUT_GET,"kod") : "*";

if($ulke_kodu === "*") {echo json_encode(array());exit();}

$mysqli = new mysqli("localhost", "root", "xpsoes", "world");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

$_data = array();
//Ulke Adını bul
$query = "SELECT name FROM country WHERE code=?";
$stmt = $mysqli->prepare($query); // Statement : bildirim
$stmt->bind_param('s',$ulke_kodu); //Binding - SQL güvenliği
$_ulke = "?";
if ($stmt) {
    $stmt->execute();
    $stmt->bind_result($ulke_ad);
    while ($stmt->fetch()) {
        $_ulke = mb_convert_encoding($ulke_ad,"UTF-8");
    }
    $stmt->close();
}
$_data["ulke"] = $_ulke;

//Sehir listesi
$query = "SELECT Name, Population FROM city WHERE countryCode = ? ORDER BY Name"; //SQL Sorgusu
$stmt = $mysqli->prepare($query); // Statement : bildirim
$stmt->bind_param('s',$ulke_kodu); //Binding - SQL güvenliği

$_liste = [];//array();
if ($stmt) {
    /* execute statement */
    $stmt->execute();
    /* bind result variables */
    $stmt->bind_result($sehir_ad, $_nufus);
    /* fetch values */
    while ($stmt->fetch()) {
        array_push($_liste, array("sehir"=>mb_convert_encoding($sehir_ad,"UTF-8"),"nufus"=>$_nufus));
    }
    /* close statement */
    $stmt->close();
}else{
    echo "hatalı SQL sorgusu.";
}
$_data["sehirler"]=$_liste;





$mysqli -> close();
//var_dump($_liste);
echo json_encode($_data);
 ?>

