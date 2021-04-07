<?php 

$ulke_kodu = isset($_GET["kod"]) ? filter_input(INPUT_GET,"kod") : "*";

if($ulke_kodu === "*") {echo json_encode(array());exit();}

$mysqli = new mysqli("localhost", "root", "xpsoes", "world");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

$_data = array();

//Konuşulan diller
$query = "SELECT Language FROM countrylanguage WHERE CountryCode=? AND Percentage>1 ORDER BY Percentage DESC"; //SQL Sorgusu
$stmt = $mysqli->prepare($query); // Statement : bildirim
$stmt->bind_param('s',$ulke_kodu); //Binding - SQL güvenliği

$_liste = [];//array();
if ($stmt) {
    /* execute statement */
    $stmt->execute();
    /* bind result variables */
    $stmt->bind_result($_dil);
    /* fetch values */
    while ($stmt->fetch()) {
        array_push($_liste, array("dil"=>mb_convert_encoding($_dil,"UTF-8")));
    }
    /* close statement */
    $stmt->close();
}else{
    echo "hatalı SQL sorgusu.";
}
$_data["diller"]=$_liste;

echo json_encode($_data);

 ?>
