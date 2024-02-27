<?php
#設定時區date_default_timezone_set('Asia/Taipei');
#date_default_timezone_set('Asia/Taipei');
$d1 = date("Y-m-d H-i-s");

$d2 = date("Y-m-d H:i:s",time()+30*86400);

$str1 = "2024-02-14";
$str2 = "2024/02/14";
$str3 = "2024-02";
$str4 = "abc";

$t1 = strtotime($str1);
$t2 = strtotime($str2);
$t3 = strtotime($str3);
$t4 = strtotime($str4);#無法轉換的會拿到false

$e1 = date("Y-m-s H:i:s",$t1);
$e2 = date("Y-m-s H:i:s",$t2);
$e3 = date("Y-m-s H:i:s",$t3);
$e4 = date("Y-m-s H:i:s",$t4);

echo json_encode([
    'd1' => $d1,
    'd2' => $d2,
    't1' => $t1,
    't2' => $t2,
    't3' => $t3,
    't4' => $t4,
    'e1' => $e1,
    'e2' => $e2,
    'e3' => $e3,
    'e4' => $e4,
]);