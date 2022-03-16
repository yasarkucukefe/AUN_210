<?php 

class Kare{

    private $kenar;

    public function __construct($_kenar){
        $this->kenar = $_kenar;
    }

    public function sekil_alan(){
        $alan = $this->kenar * $this->kenar;
        return $alan;
    }

}


 ?>
