<?php 

require "islem.php";

class Hesap extends Islem{

    function polimorfizm(){
        return "Çok biçimlilik";
    }


    function ozel_hesap($a, $b){
        $sonuc = $this->topla($a, $b) - $this->carpma($a, $b) + $this->cikartma($a, $b);
        return $sonuc;
    }

    function baska_hesap($a){
        $sonuc = $a * $this->gizli_func(5);
        return $sonuc;
    }

}


 ?>
