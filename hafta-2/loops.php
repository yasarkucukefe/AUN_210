<?php 

$_rakam = 1;

// While loop
echo "<hr>While Loop:<br>";
while($_rakam < 10){
    echo  $_rakam ."<br>";
    $_rakam = $_rakam + 1;

    if($_rakam > 5){
        break;
    }

}

// for loop
echo "<hr>For Loop:<br>";
for($i = 0; $i<10; $i++){
    if($i === 5){continue;}
    echo $i."<br>";
}



 ?>
