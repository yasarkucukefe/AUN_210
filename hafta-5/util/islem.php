<?php

require "kural.php"; 

class Islem implements Metodlar{

    public $rakam = 15;
    private $gizli = 10;

    function ozet_sonuc(){}

    public function detay_sonuc($deger){return $deger;}

    function topla($a, $b){
        if($this->sayisalDegerMi($a, $b)){
            return $a + $b;
        }
        return NULL;
    }

    function carpma($a, $b){
        if($this->sayisalDegerMi($a, $b)){return $a * $b;}
        return NULL;
    }

    function cikartma($a, $b){
        if($this->sayisalDegerMi($a, $b)){return $a - $b;}      
        return NULL;
    }

    function polimorfizm(){
        return "Polymorphism";
    }

    private function sayisalDegerMi($rakam1, $rakam2){
        return is_numeric($rakam1) && is_numeric($rakam2);
    }

    protected function gizli_func($rakam){
        return $rakam ** 2;
    }

}

 ?>
