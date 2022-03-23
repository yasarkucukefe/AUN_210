<?php 

$hostname = "localhost";
$dbname = "sakila";
$dbuser = "root";
$dbpass = "xpsoes";

$conn = mysqli_connect($hostname, $dbuser, $dbpass, $dbname);

if(!$conn){
    echo "Veritabanına bağlanılamadı. ".mysqli_connect_error();
    exit();
}

echo "Veritabanına bağlandı<br>";
    // Veritabanı işlemleri ...

$sql = "SELECT film_id,title FROM film";

$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result)>0){
    while($row = mysqli_fetch_assoc($result)) {
        //echo $row['title']."<br>";
        echo json_encode($row);
    }
}else{
    echo "SQL sorgusu bir sonuç döndürmedi.";
}


mysqli_close($conn);


 ?>
