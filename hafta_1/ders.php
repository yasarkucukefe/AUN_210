<?php

// PHP'de değişken isimler $ ile başlar
# Başka bir yorum
$_metin = "PHP dersi";
$_abc = "İstanbul";
$_rakam = 1234;

$_yeni = $_metin . " Çarşamba günleri olacaktır.";
echo $_yeni;

echo "<hr>";
$_yeni_rakam = $_rakam + 125;
$_abc = 29;
$_alfabe = "Alfabemizde ".$_abc." harf vardır";
echo $_alfabe;

echo "<hr>";
$malzeme = "Plastik";
$_malzeme = "Demir";
//echo "İçindeki malzemeler ".$malzeme." ve ".$_malzeme;
echo "İçindeki malzemeler {$malzeme} ve {$_malzeme}";

/*
birden fazla satır için yorum oluştururken 
2. satır.
3. satır.
*/

$_text = "PHP kodu devam ediyor";

$_not = 85;
if($_not > 70){
    echo "Tebrikler!";
}else{
    echo "Daha çok çalışmalısın.";
}

#Ternary operator
echo "<br>PHP Ternary operator<br>";

echo ($_not > 70) ? "Tebrikler!" : "Daha çok çalışmalısın.";

if($_isim == null){echo "isim tanımlı değil.";}
else{echo $_isim." bugün derse gelmedi.";}
echo "<hr>";
#Alternatif Ternary Operator
# (koşul kontrolü) ? (doğru ise) : (yanlış ise)
echo ($_isim == null) ? "isim tanımlı değil" : "bugün derse gelmedi";


#PHP ile html etiketleri oluşturma örneği (Normalde front end'e bırakılması gereken bir iş)
$_isimler=["Ayşe","Mehmet","Cumali","Ali"];
echo "<ol>";
foreach($_isimler as $_isim){
	echo "<li>{$_isim}</li>";
}
echo "</ol>";


?>