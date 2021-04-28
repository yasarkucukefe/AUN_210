<?php 

class db_conn {

    public function db_baglan(){
        $mysqli = new mysqli("localhost", "root", "xpsoes", "seyahat_sitesi");
        /* check connection */
        if (mysqli_connect_errno()) {
            printf("Connect failed: %s\n", mysqli_connect_error());
            exit();
        }else{
            return $mysqli;
        }
    }

    public function db_baglanti_bitir($mysqli){
        $mysqli -> close();
    }

}

 ?>
