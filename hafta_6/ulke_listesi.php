<?php 

//MySQL veritabanı bağlantısı
$mysqli = new mysqli("localhost", "root", "xpsoes", "world");
/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}
// Veritabanına bağlantı var.

//Ülke listesi sorgusu
$query = "SELECT code,name FROM country ORDER BY name"; //SQL Sorgusu
$stmt = $mysqli->prepare($query); // Statement : bildirim

//veri array
$_liste = [];//array();
if ($stmt) {
    /* execute statement */
    $stmt->execute();
    /* bind result variables */
    $stmt->bind_result($ulke_kodu, $ulke_ad);
    /* fetch values */
    while ($stmt->fetch()) {
        array_push($_liste, array("kod"=>$ulke_kodu,"isim"=>mb_convert_encoding($ulke_ad,"UTF-8")));
        $_liste[] = array("kod"=>$ulke_kodu,"isim"=>mb_convert_encoding($ulke_ad,"UTF-8"));
    }
    /* close statement */
    $stmt->close();
}else{
    echo "hatalı SQL sorgusu.";
}

$mysqli -> close();

//Veritabanında alınan verileri istemciye gönder
echo json_encode($_liste);
 ?>

