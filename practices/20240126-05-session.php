<?php
#預設session是關閉的
session_start();#啟用session的功能
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    if(isset($_SESSION["num"])){
        $_SESSION["num"] ++;
    }else{
        $_SESSION["num"] = 1;
    }
    echo"<h2>{$_SESSION["num"]}</h2>";
    ?>
</body>
</html>