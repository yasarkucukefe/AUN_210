<?php 

require "db_conn.php";

class data_db extends db_conn {

    public function yorumlari_getir($mysqli)
    {
        $sql = "SELECT yorum FROM yorumlar";
        $stmt = $mysqli->prepare($sql);
        $data=[];
        if($stmt){
            $stmt->execute();
            $stmt->bind_result($_yorum);
            while ($stmt->fetch()) {
                $yorum =  mb_convert_encoding($_yorum,"UTF-8");
                array_push($data, htmlspecialchars($yorum, ENT_QUOTES, 'UTF-8'));
                //array_push($data, $yorum);
            }
            $stmt->close();
        }
        return $data;
    }

    public function hesap_bilgilerini_getir ($mysqli, $_anahtar){
        $sql = "SELECT hesap FROM oturumlar WHERE token = ?";
        $stmt = $mysqli->prepare($sql);
        $stmt ->bind_param('s',$_anahtar);
        $id = 0;
        if($stmt){
            $stmt->execute();
            $stmt->bind_result($_id);
            while($stmt -> fetch()){
                $id = $_id;
            }
            $stmt->close();
        }
        // oturumlar tablosundan sağlanan anahtar için bir hesap id getirilidi (yanlış anahtar için id = 0)

        $sql = "SELECT auto_id,isim,soyisim,kategori FROM hesaplar WHERE auto_id = ?";
        $stmt = $mysqli->prepare($sql);
        $stmt ->bind_param('i',$id);
        $data=[];
        if ($stmt) {
            $stmt->execute();
            $stmt->bind_result($id,$isim,$soyisim,$kategori);
            while ($stmt->fetch()) {
                $_id = $id;
                $_isim = mb_convert_encoding($isim,"UTF-8");
                $_soyisim = mb_convert_encoding($soyisim,"UTF-8");
                $data=["id"=>$_anahtar,"isim"=>htmlspecialchars($_isim),"soyisim"=>htmlspecialchars($_soyisim),"kategori"=>$kategori];
            }
            $stmt->close();
        }
        return $data;
    }

    public function hesap_sifre_kontrol($mysqli, $hesap, $sifre){
        //Kullanıcının şifre koduna erişim
        $sql = "SELECT sifre_hash FROM hesaplar WHERE hesap_adi = ?";
        $stmt = $mysqli->prepare($sql);
        $stmt ->bind_param('s',$hesap);
        $_hash = "***";
        if ($stmt) {
            $stmt->execute();
            $stmt->bind_result($hash);
            while ($stmt->fetch()) {
                $_hash = $hash;
            }
        }
        if(password_verify($sifre, $_hash)){
            $sql = "SELECT auto_id,isim,soyisim FROM hesaplar WHERE hesap_adi=?";
            $stmt = $mysqli->prepare($sql);
            $stmt ->bind_param('s',$hesap);
            $data=[];
            if ($stmt) {
                $stmt->execute();
                $stmt->bind_result($id,$isim,$soyisim);
                while ($stmt->fetch()) {
                    //hesap adı ve şifre doğru
                    $_id = $id;
                    $_isim = mb_convert_encoding($isim,"UTF-8");
                    $_soyisim = mb_convert_encoding($soyisim,"UTF-8");
                    $_anahtar = $this->anahtar_olustur(128);
                    //
                    $data=["id"=>$_anahtar,"isim"=>$_isim,"soyisim"=>$_soyisim];

                }
                $stmt->close();
            }
            if(count($data)){
                //oturumlar tablosunda anahtar için yeni kayıt oluştur.            
                $sql_ = "INSERT INTO oturumlar (token, hesap) VALUES(?,?)";
                $stmt_ = $mysqli->prepare($sql_);
                $stmt_ -> bind_param('si',$_anahtar,$_id);
                $stmt_ -> execute();
            }
            return $data;
        }else{
            return ["hatalı şifre"];
        }

        
    }

    private function anahtar_olustur($_kac){
        $_havuz = "0123456789ABCDEFGHIJKLMNOPRSTUVWYZ";
        $_token="";
        for($i=0;$i<$_kac;$i++){
            $_rand = rand(0,strlen($_havuz)-1);
            $_token = $_token.substr($_havuz, $_rand, 1);
        }
        return $_token;
    }

}


 ?>
