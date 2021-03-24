<?php 

class Kare{
    public $_isim = "Kare";
    private $_kenar;

    function __construct($kenar){
        $this->_kenar = $kenar;
    }

    function cevre_hesapla(){
        return $this->_kenar * 4; 
    }

    function alan_hesapla(){
        return $this->_kenar * $this->_kenar;
        //return pow($this->_kenar,2);
    }
}


 ?>
