<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>210 2. Hafta Dersi </title>
</head>
<body>
    <h1>Dünya Saatleri</h1>

    <div id='istanbul'>
        <?php  
            date_default_timezone_set("Europe/London");
            echo date('Y-m-d H:i:s');
         ?>
    </div>
</body>
</html>
