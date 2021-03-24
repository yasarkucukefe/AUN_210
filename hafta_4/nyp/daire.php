<?php 

class Daire{
    public $_isim = "Daire";
    private $_r; //Yarıçap
    private $_PI = 3.14;

    function __construct($r){
        $this->_r = $r;
    }

    function cevre_hesapla(){
        return 2 * $this->_PI * $this->_r; //2*pi*r
    }

    function alan_hesapla(){
        return $this->_PI * pow($this->_r,2); //pi*r^2
    }
}

 ?>
