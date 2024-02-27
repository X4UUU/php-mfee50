<?php
# and, or 的優先權比 = 還要低
$a1 = 5 and 7;
var_dump($a1);
echo '<br>';

$a2 = 5 or 7;
var_dump($a2);
echo '<br>';

$a3 = 0 and 7;
var_dump($a3);
echo '<br>';
# php 的邏輯運算結果一定是布林值
$a4 = (5 and 7);
var_dump($a4);
echo '<br>';

$a5 = (5 or 7);
var_dump($a5);
echo '<br>';

$a6 = (0 and 7);
var_dump($a6);
echo '<br>';

