<pre><?php
$a = 10;
$b = &$a;#設定位址
$b = 99;
echo "\$a: $a, \$b: $b<br>";

$ar1=[
    'name'=>'David',
    'age'=> 20,
];
$ar2 = $ar1;#複製一份新的,再設定
$ar3 = &$ar2;
$ar1['age'] = 13;
print_r($ar1);
print_r($ar2);
print_r($ar3);
?></pre>