<?php 

$id = $_GET["id"] ? $_GET["id"]:0;

$hostname = "localhost";
$dbname = "sakila";
$dbuser = "root";
$dbpass = "xpsoes";

$conn = mysqli_connect($hostname, $dbuser, $dbpass, $dbname);

if(!$conn){
    echo "Veritabanına bağlanılamadı. ".mysqli_connect_error();
    exit();
}

//echo "Veritabanına bağlandı<br>";

$sql = "SELECT first_name,last_name FROM actor WHERE actor_id=?";
$stmt = mysqli_prepare($conn, $sql);
mysqli_stmt_bind_param($stmt,"i",$id);
mysqli_execute($stmt);
mysqli_stmt_bind_result($stmt, $isim, $soyisim);
while (mysqli_stmt_fetch($stmt)) {
    echo $isim." ".$soyisim;
}
mysqli_stmt_close($stmt);


mysqli_close($conn);

 ?>
