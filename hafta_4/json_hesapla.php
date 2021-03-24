<?php 
require "nyp/ucgen.php";
require "nyp/kare.php";
require "nyp/daire.php";
require "nyp/dikdortgen.php";

//GET parametrelerini oku
if(isset($_GET['sekil'])){$_sekil = intval($_GET['sekil']);}else{$_sekil = 0;};
if(isset($_GET['istenen'])){$_istenen = intval($_GET['istenen']);}else{$_istenen = 0;};
if(isset($_GET['param'])){$_param = $_GET['param'];}else{$_param = 0;};

//sekil parametresi isim olarak değil bir rakam olsun. 1=>Üçgen, 2=>Kare, 3=>Daire, 4=> Dikdörtgen
//istenen parametresi rakam olsun: 1=>çevre, 2=>alan, 3=>her ikisini de hesaplasın.
//param parametresi rakam olacak. Üçgen için rakamlar arasında , olacak. ...&param=3,4,2

$_sonuc = array();
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
            $_sonuc["hata"]="Üçgen kenarları a,b,c olarak yazılmalıdır.";
            echo json_encode($_sonuc);
            die();
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
    case 4: //Dikdortgen
        $_kenarlar = explode(",", $_param);
        if(count($_kenarlar) === 2){
            $_a = floatval($_kenarlar[0]);//floatval("1.2")=>1.2
            $_b = floatval($_kenarlar[1]);
            $sekil= new Dikdortgen($_a, $_b);
        }else{
            $_sonuc["hata"]="Dikdortgen kenarları a,b olarak yazılmalıdır.";
            echo json_encode($_sonuc);
            die();
        }  
        break;     
    default:
        $_sonuc["hata"]="Şekil mevcut değil.";
        echo json_encode($_sonuc);
        die();
}

$_sonuc["isim"]=$sekil->_isim;
//Hangi hesap yapılacak?
switch (intval($_istenen)) {
    case 1:
        $_sonuc["cevre"] = $sekil->cevre_hesapla();
        break;
    case 2:
        $_sonuc["alan"] = $sekil->alan_hesapla();
        break;
    case 3:
        $_sonuc["cevre"] = $sekil->cevre_hesapla();
        $_sonuc["alan"] = $sekil->alan_hesapla();
        break;
    default:
        $_sonuc["hata"]="İstenen hesaplama yöntemi mevcut değil.";
        echo json_encode($_sonuc);
        die();
}

echo json_encode($_sonuc);

 ?>
