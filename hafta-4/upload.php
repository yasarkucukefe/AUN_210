<?php 

echo "Dosya yükleme";

if(isset($_FILES["dosya"])){
    if(move_uploaded_file($_FILES['dosya']['tmp_name'], $_FILES['dosya']['name'])){
        echo "dosya yüklendi";
    }else{
        echo "hata";
    }
}else{
    echo "dosya mevcut değil";
}

 ?>
