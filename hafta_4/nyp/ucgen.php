<?php 

class Ucgen {
    public $_isim = "Üçgen";
    private $_a,$_b,$_c;

    //constructor
    function __construct($a=0,$b=0,$c=0){
        $this->_a = $a;
        $this->_b = $b;
        $this->_c = $c;
    }

    function cevre_hesapla(){
        return $this->_a + $this->_b + $this->_c;
    }

    function alan_hesapla(){
        //Heron formülü ile alan hesaplanır
        //https://bikifi.com/biki/ucgenin-alani
        $_u = ($this->_a + $this->_b +$this->_c)/2;
        return sqrt($_u*($_u-$this->_a)*($_u-$this->_b)*($_u-$this->_c));
    }

}


 ?>

