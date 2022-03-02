<?php 

$hesKodu = "*";
if(isset($_GET["heskod"])){
   $hesKodu = $_GET["heskod"]; 
}else{
    $sonuc = array("sonuc"=>"bilinmiyor", "hes"=>"hes kodu bulunamadı.");
    echo json_encode($sonuc);
    exit();
}

if(strlen($hesKodu) !== 10){
    $sonuc = array("sonuc"=>"bilinmiyor", "hes"=>"hes kodu bulunamadı.");
    echo json_encode($sonuc);
    exit();
}

// $hesKodu = "HAID93IEEW";

$hes_array = array(
    "HAID93IEEW" => true,
    "8IJASDFIJI" => false,
    "88JDIE03KD" => false,
    "9DDKASDOIF" => true
);

$durum = "bilinmiyor";
if(array_key_exists($hesKodu, $hes_array)){
    $durum = $hes_array[$hesKodu];
}else{
    $sonuc = array("sonuc"=>"bilinmiyor", "hes"=>"hes kodu bulunamadı.");
    echo json_encode($sonuc);
    exit();
}


$sonuc = array("sonuc"=>"Risksizdir", "hes"=>$hesKodu);
if($durum){
    $sonuc["sonuc"] = "Risklidir";
}

echo json_encode($sonuc);


 ?>
