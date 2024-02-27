<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="get"></form>
</body>
</html>
<?php
#php 會把 query string parameters 解析完放到 $_GET
$a = isset($_GET['a']) ? intval($_GET['a']) : 0;
$b = isset($_GET['b']) ? floatval($_GET['b']) : 0;

echo $a+$b;
