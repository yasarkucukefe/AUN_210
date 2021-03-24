<?php 
//GET parametrelerini oku
if(isset($_GET['sekil'])){$_sekil = $_GET['sekil'];}else{$_sekil = '';};
if(isset($_GET['istenen'])){$_istenen = $_GET['istenen'];}else{$_istenen = '';};
if(isset($_GET['param'])){$_param = $_GET['param'];}else{$_param = 0;};

// ! : inverse => değili , !true = false, !false = true
// echo !isset($_GET['param']);

echo $_sekil;

//Gerekli php dosyasını import et
switch ($_sekil) {
    case 'daire':
        require "dosyalar/daire.php";
        break;
    case 'kare':
        require "dosyalar/kare.php";
        break;
    case 'ucgen':
        require "dosyalar/ucgen.php";
        break;
    default:
        exit("Şekil belirtilmedi.");
        break;
}
echo "<hr>";

//gerekli php dosyası require ile tanımlandı
echo "İstenen: ".$_istenen;
echo "<hr>";
//echo "Parametreler: ".$_param;

switch ($_istenen) {
    case 'alan':
        echo alan_hesapla();
        break;
    case 'cevre':
        echo cevre_hesapla();
        break;
    case 'alan_cevre':
        echo alan_cevre_hesapla();
    default:
        # code...
        break;
}


 ?>
