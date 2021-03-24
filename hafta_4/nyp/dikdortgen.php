<?php 

class Dikdortgen{
    public $_isim = "Dikdörtgen";
    private $_a, $_b;

    function __construct($a, $b){
        $this->_a = $a;
        $this->_b = $b;
    }

    function cevre_hesapla(){
        return ($this->_a + $this->_b) * 2; 
    }

    function alan_hesapla(){
        return $this->_a * $this->_b;
        //return pow($this->_kenar,2);
    }
}

 ?>
