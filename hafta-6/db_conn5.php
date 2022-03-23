<?php 

$hostname = "localhost";
$dbname = "sakila";
$dbuser = "root";
$dbpass = "xpsoes";

try {
  $conn = new PDO("mysql:host=$hostname;dbname=$dbname", $dbuser, $dbpass);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $stmt = $conn->prepare("SELECT title FROM film");
  $stmt->execute();

  // set the resulting array to associative
  $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
  foreach($stmt->fetchAll() as $k=>$v) {
    echo json_encode($v);
  }
} catch(PDOException $e) {
  echo "Error: " . $e->getMessage();
}
$conn = null;



 ?>
