<?php 

$mysqli = new mysqli("localhost", "root", "xpsoes", "world");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

$query = "SELECT code,name FROM country ORDER BY name"; //SQL Sorgusu
$stmt = $mysqli->prepare($query); // Statement : bildirim

$_liste = [];//array();
if ($stmt) {
    /* execute statement */
    $stmt->execute();
    /* bind result variables */
    $stmt->bind_result($ulke_kodu, $ulke_ad);
    /* fetch values */
    while ($stmt->fetch()) {
        $_liste[] = array("kod"=>$ulke_kodu,"isim"=>$ulke_ad);
        // array_push($_liste, array("kod"=>$ulke_kodu,"isim"=>$ulke_ad))
    }
    /* close statement */
    $stmt->close();
}else{
    echo "hatalı SQL sorgusu.";
}

$mysqli -> close();

echo json_encode($_liste);


/*
Açıklama vs.
başka açıklamalar
*/


 ?>

