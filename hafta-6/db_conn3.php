<?php 

$ara = $_GET["ara"] ? $_GET["ara"]:"_";
$dil = $_GET["dil"] ? $_GET["dil"]:0;

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

$sql = "SELECT title FROM film WHERE title LIKE ? AND language_id=?";
$stmt = mysqli_prepare($conn, $sql);
$ara = "%".$ara."%";
mysqli_stmt_bind_param($stmt,"si",$ara,$dil);
mysqli_execute($stmt);
mysqli_stmt_bind_result($stmt, $title);
$data =[];
while (mysqli_stmt_fetch($stmt)) {
    //echo $title."<br>";
    $data[] = htmlspecialchars($title); #
}

mysqli_stmt_close($stmt);
mysqli_close($conn);

echo json_encode($data);

 ?>
