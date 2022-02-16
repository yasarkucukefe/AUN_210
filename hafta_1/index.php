<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
</head>
<body>
PHP: Sunucu tarafı programlama dersi.

<table>
    <thead>
        <tr>
            <th>Kolon-A</th>
            <th>Kolon-B</th>
            <th>Kolon-C</th>
            <th>Kolon-D</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>1</td>
            <td>2</td>
            <td>3</td>
            <td>4</td>
        </tr>
        <tr>
            <td>10</td>
            <td>11</td>
            <td>12</td>
            <td>13</td>
        </tr>
    </tbody>
</table>

<hr>

<?php 

$thead = "<thead><tr><th>Kolon-A</th><th>Kolon-B</th><th>Kolon-C</th><th>Kolon-D</th></tr></thead>";
$tbody = "<tbody><tr><td>1</td><td>2</td><td>3</td><td>4</td></tr><tr><td>10</td><td>11</td><td>12</td><td>13</td></tr></tbody>";
$table = "<table>".$thead.$tbody."</table>";
echo $table;

echo "<hr>";
// Program komutları ile table oluştur
$thArr = ["Kolon-A","Kolon-B","Kolon-C","Kolon-D"];
$tdArr = array();
array_push($tdArr, array(1,2,3,4));
array_push($tdArr, array(10,11,12,13));

$_thead = "<thead><tr>";
foreach ($thArr as $deger) {
    $_thead.="<td>".$deger."</td>";
}
$_thead .= "</tr></thead>";

$_tbody = "<tbody>";
foreach ($tdArr as $deger) {
    $_tbody .= "<tr><td>".implode("</td><td>", $deger)."</td></tr>";
}
$_tbody .= "</tbody>";

$_table = "<table>".$thead.$tbody."</table>";
echo $_table;


 ?>
<h3>Başlangıçta boş olan tablo</h3>
<table id='tablo'>
<thead><tr><th>Kolon-A</th><th>Kolon-B</th><th>Kolon-C</th><th>Kolon-D</th></tr></thead></tr></thead><tbody></tbody>
</table>

<script src="js/jquery.min.js"></script>
<script>



    const tabloOlustur = (arr) => {
        let tbody = "";
        for(const degerler of arr){
            const tr = "<tr><td>"+degerler.join("</td><td>")+"</td></tr>";
            $("#tablo tbody").append(tr);
        }
    };

    fetch('http://localhost/ybs210/sunucu.php')
      .then(response => response.json())
      .then(data => tabloOlustur(data));

</script>


</body>
</html>


