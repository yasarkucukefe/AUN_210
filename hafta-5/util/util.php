<?php 

function cikartmaIslemi($a, $b){
    if(sayisalDegerMi($a, $b)){return $a - $b;}
    return NULL;
}

function carpma($a, $b){
    if(sayisalDegerMi($a, $b)){return $a * $b;}
    return NULL;
}


function topla($a, $b) {
    if(sayisalDegerMi($a, $b)){return $a + $b;}
    return NULL;
    
}

function sayisalDegerMi($rakam1, $rakam2){
    return is_numeric($rakam1) && is_numeric($rakam2);
}


 ?>
