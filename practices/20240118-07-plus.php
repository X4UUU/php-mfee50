<?php
#sleep(15);#暫停執行幾秒
#php 會把 query string parameters 解析完放到 $_GET
$a = isset($_GET['a']) ? intval($_GET['a']) : 0;
$b = isset($_GET['b']) ? intval($_GET['b']) : 0;

echo $a+$b;
