<?php 
require "db_conn.php";

class veri_db extends db_conn{

    public function ulke_listesi($mysqli){
        $query = "SELECT code,name FROM country ORDER BY name"; //SQL Sorgusu
        $stmt = $mysqli->prepare($query);
        $_liste = [];//array();
        if ($stmt) {            
            $stmt->execute(); /* execute statement */            
            $stmt->bind_result($ulke_kodu, $ulke_ad);/* bind result variables */            
            while ($stmt->fetch()) {/* fetch values */
                array_push($_liste, array("kod"=>$ulke_kodu,"isim"=>mb_convert_encoding($ulke_ad,"UTF-8")));
            }            
            $stmt->close();/* close statement */
        }else{
            echo "hatalı SQL sorgusu.";
        }
        return $_liste;
    }

    public function sehir_listesi($mysqli, $ulke_kodu){
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
        //
        return $_data;
    }

    public function dil_listesi($mysqli, $ulke_kodu){
        //Konuşulan diller
        $query = "SELECT Language FROM countrylanguage WHERE CountryCode=? AND Percentage>1 ORDER BY Percentage DESC"; //SQL Sorgusu
        $stmt = $mysqli->prepare($query); // Statement : bildirim
        $stmt->bind_param('s',$ulke_kodu); //Binding - SQL güvenliği

        $_liste = [];//array();
        if ($stmt) {
            /* execute statement */
            $stmt->execute();
            /* bind result variables */
            $stmt->bind_result($_dil);
            /* fetch values */
            while ($stmt->fetch()) {
                array_push($_liste, array("dil"=>mb_convert_encoding($_dil,"UTF-8")));
            }
            /* close statement */
            $stmt->close();
        }else{
            echo "hatalı SQL sorgusu.";
        }
        $_data["diller"]=$_liste;
        return $_data;
    }

}

 ?>
