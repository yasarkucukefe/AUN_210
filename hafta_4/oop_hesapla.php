<?php 
require "nyp/ucgen.php";
require "nyp/kare.php";
require "nyp/daire.php";

//GET parametrelerini oku
if(isset($_GET['sekil'])){$_sekil = intval($_GET['sekil']);}else{$_sekil = 0;};
if(isset($_GET['istenen'])){$_istenen = intval($_GET['istenen']);}else{$_istenen = 0;};
if(isset($_GET['param'])){$_param = $_GET['param'];}else{$_param = 0;};

//sekil parametresi isim olarak değil bir rakam olsun. 1=>Üçgen, 2=>Kare, 3=>Daire
//istenen parametresi rakam olsun: 1=>çevre, 2=>alan, 3=>her ikisini de hesaplasın.
//param parametresi rakam olacak. Üçgen için rakamlar arasında , olacak. ...&param=3,4,2

// hangi şekil?
switch ($_sekil) {
    case 1://Üçgen
        $_kenarlar = explode(",", $_param);
        if(count($_kenarlar) === 3){
            $_a = floatval($_kenarlar[0]);//floatval("1.2")=>1.2
            $_b = floatval($_kenarlar[1]);
            $_c = floatval($_kenarlar[2]);
            $sekil = new Ucgen($_a,$_b,$_c);
        }else{
            die("Üçgen kenarları a,b,c olarak yazılmalıdır.");
        }        
        break;
    case 2: //Kare
        $_kenar = floatval($_param);
        $sekil = new Kare($_kenar);
        break;
    case 3: //Daire
        $_yaricap = floatval($_param);
        $sekil = new Daire($_yaricap);
        break;
    default:
        die("Şekil mevcut değil.");
        break;
}

echo $sekil->_isim;
echo "<hr>";
//Hangi hesap yapılacak?
switch (intval($_istenen)) {
    case 1:
        echo "Çevresi:".$sekil->cevre_hesapla();
        break;
    case 2:
        echo "Alan:".$sekil->alan_hesapla();
        break;
    case 3:
        echo "Çevresi:".$sekil->cevre_hesapla();
        echo "<br>";
        echo "Alan:".$sekil->alan_hesapla();
        break;
    default:
        # code...
        break;
}

 ?>
