<?php 

class Meyve {
    private $meyve_isim; //public olsa idi dışarıdan erişilebilirdi $_nesne->meyve_isim. private olduğu için erişim yok.
    public $meyve_renk;

    //metodlar (isim ve renk oluşturmak için)
    function set_meyve_isim($_isim){
        echo "<br>Meyvenin meyve_isim değişkenine deger atandı.";
        $this->meyve_isim = $_isim;
    }

    function set_meyve_renk($_renk){
        echo "<br>Meyvenin meyve_renk değişkenine deger atandı.";
        $this->meyve_renk = $_renk;
    }

    //methodlar (isim ve renk değerlerine erişmek için)
    function get_meyve_isim(){
        return $this->meyve_isim;
    }

    function get_meyve_renk(){
        return $this->meyve_renk;
    }

    private function get_isim_renk(){
        return $this->meyve_isim." renk:".$this->meyve_renk;
    }

    function get_meyve_isim_renk(){
        return $this->get_isim_renk();
    }
}

class YazMeyvesi extends Meyve{
    private $hangi_ay;

    function set_hangi_ay($_ay){
        $this->hangi_ay = $_ay;
    }

    function get_hangi_ay(){
        return $this->hangi_ay;
    }
}


$_elma = new Meyve();
$_elma->set_meyve_isim("elma");
$_elma->set_meyve_renk("kırmızı");
echo "<hr>Yeni Class<br>";
echo "isim:".$_elma->get_meyve_isim();
echo "<br>renk:".$_elma->meyve_renk;
echo "<hr>";
//Inheritance: türetme
$_cilek = new YazMeyvesi();
$_cilek->set_meyve_isim("Çilek");
$_cilek->set_meyve_renk("Kırmızı");
echo "<hr>";
echo "isim:".$_cilek->get_meyve_isim();
echo "<br>renk:".$_cilek->meyve_renk;
$_cilek->set_hangi_ay("Haziran");
echo "<br>Çıktığı ay:".$_cilek->get_hangi_ay();
echo "<br>Protected";
echo $_elma->get_meyve_isim_renk();
echo "<br>";
echo $_cilek->get_meyve_isim_renk();

 ?>
