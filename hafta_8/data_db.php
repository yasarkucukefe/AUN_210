<?php 

require "db_conn.php";

class data_db extends db_conn {

    public function hesap_sifre_kontrol($mysqli, $hesap, $sifre){
        $sql = "SELECT auto_id,isim,soyisim FROM hesaplar WHERE hesap_adi=? AND sifre=?";
        $stmt = $mysqli->prepare($sql);
        $stmt ->bind_param('ss',$hesap,$sifre);
        $data=[];
        if ($stmt) {
            $stmt->execute();
            $stmt->bind_result($id,$isim,$soyisim);
            while ($stmt->fetch()) {
                $_id = $id;
                $_isim = mb_convert_encoding($isim,"UTF-8");
                $_soyisim = mb_convert_encoding($soyisim,"UTF-8");
                $data=["id"=>$_id,"isim"=>$_isim,"soyisim"=>$_soyisim];
            }
            $stmt->close();
        }
        return $data;
    }

}


 ?>
