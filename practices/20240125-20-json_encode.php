<?php


$ar1=[
    'name'=>'雅虎',
    'age'=> 20,
    'data' => 'abc/def',
];
# 告訴用戶端,說此文件是 json
#<pre>{"name":"\u96c5\u864e","age":20,"data":"abc\/def"}
#\u 是unicode
header('Content-Type: application/json');
echo json_encode($ar1);
