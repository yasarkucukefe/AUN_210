<?php 

# min, max 
$_min = min(0, 12, -10, 20);
echo $_min;
echo "<br>";
$_max = max(0, 12, 20, 14, 40);
echo $_max;

$_arr = [10, 20, 5, 49];
echo min($_arr);

# Sabit sayılar
echo "<hr>";
define("SABIT", 120394);
echo SABIT;

# if else
$_rakam = 20;
if($_rakam > 20) {
    # $_rakam, 20 sayısından büyükse çalışacak kod
}else{
    # $_rakam, 20 sayısından büyük değilse çalışacak kod
}

# ternary if
# $_sonuc = koşul_kontrolu ? dogru_ise_deger : doğru_degil_ise_deger
echo "<br>";
$_kontrol = $_rakam > 20 ? true : false;
echo var_dump($_kontrol);

echo "<hr>";
# switch
$_n = 15;
switch ($_n) {
    case 1:
        # kod ($_n = 1 için)
        echo "n=1 için çalışacak kod ...";
        break;
    case 2:
        # kod ($_n = 2 için)
        echo "n=2 için çalışacak kod ...";
        break;
    case 3:
        # kod ($_n = 2 için)
        echo "n=3 için çalışacak kod ...";
        break;
    case 4:
    case 5:
    case 6:
        echo "n=4 veya 5 veya 6 için çalışacak kod ...";
        break;
    default:
        # code...
        echo "hiç bir koşul gerçekleşmemiş ise çalışacak kod"; 
        break;
}
echo "<hr>";
# Döngüler (loops)

for($i=0; $i<10; $i++){           
    if($i === 6){break;} # eğer $i = 6 ise for döngüsünden çık
    if($i === 3){continue;} # eğer $i = 3 ise devam eden kodu (for döngüsündeki) çalıştırma ama döngüye devam et
    echo $i."<br>"; 
}

echo "--- <br>";
$_arr = [1,2,5,3,5,6,29];
foreach ($_arr as $_deger) {
    if($_deger === 6){continue;} 
    echo $_deger."<br>";
}

// break bütün döngülerde kullanılabilir.
echo "--- <br>";
# While döngüsü
$_n = 0;
while ($_n <= 10) {
    if($_n === 4) {$_n = $_n + 2;continue;}
    echo $_n."<br>";
    $_n = $_n + 2;
}

echo "--- <br>";
do {
    if($_n === 15) {$_n = $_n + 3;continue;}
    echo $_n."<br>";
    $_n = $_n + 3;

}while ($_n <= 20);
// $_n = 21
echo "n son değer: ".$_n;

 ?>
