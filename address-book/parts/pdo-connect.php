<?php
#先用變數連到主機
$db_host = "localhost";
$db_user = "book";
$db_pass = "1234";
$db_name = "proj57";
#PDO可以連到各種資料庫
#使用預設阜3306就不用改port

$dsn = "mysql:host={$db_host};dbname={$db_name};charset=utf8mb4";

$pdo_options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
];

$pdo = new PDO($dsn, $db_user, $db_pass,$pdo_options);
if(!isset($_SESSION)){
    session_start();
}