<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $name = 'Cheng';
//單引號和雙引號跳脫符號使用上有不同
    echo "Hello $name <br>";
    echo 'Hello $name <br>';
    echo "\$name: $name<br>";
    echo "{$name}123<br>";#用大括號包住變數
    ?>
</body>
</html>