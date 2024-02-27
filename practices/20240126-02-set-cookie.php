<?php
// setcookie("my_cookie"變數名稱, "abc"數值, 期限);
setcookie(
    "my_cookie"
    ,
    "hello",
);
?>
<!DOCTYPE html>
<html lang="zh">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    echo $_COOKIE["my_cookie"];
    ?>

</body>

</html>