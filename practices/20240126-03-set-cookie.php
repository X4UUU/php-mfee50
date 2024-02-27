<?php
// setcookie("my_cookie"變數名稱, "abc"數值, 期限);
/*setcookie(
    "my_cookie"
    ,
    "hello",
);*/
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
    #用判斷式
    /*if (isset($_COOKIE["my_cookie"])) {
        echo $_COOKIE["my_cookie"];
    }*/

    #用三元運算子
    echo $_COOKIE["my_cookie"] ?? '沒有設定my_cookie';
    ?>

</body>

</html>