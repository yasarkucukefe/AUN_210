<?php 

$data = json_decode(file_get_contents('php://input'), true);

//echo json_encode($data);return;

$hesKodu = $data["heskod"];
// $hesKodu = $_POST["heskod"];
// $hesKodu = "HAID93IEEW";

$hes = array(
    "HAID93IEEW" => true,
    "8IJASDFIJI" => false,
    "88JDIE03KD" => false,
    "9DDKASDOIF" => true
);

$durum = $hes[$hesKodu];
$sonuc = array("sonuc"=>"Risksizdir", "hes"=>$hesKodu);
if($durum){
    $sonuc["sonuc"] = "Risklidir";
}

echo json_encode($sonuc);


 ?>
