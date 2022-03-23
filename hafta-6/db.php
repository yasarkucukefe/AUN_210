<?php 



function db_connect(){
    $hostname = "localhost";
    $dbname = "sakila";
    $dbuser = "root";
    $dbpass = "xpsoes";

    $conn = mysqli_connect($hostname, $dbuser, $dbpass, $dbname);

    if(!$conn){
        echo "Veritabanına bağlanılamadı. ".mysqli_connect_error();
        return NULL;
        exit();
    }

    return $conn;
}


 ?>
