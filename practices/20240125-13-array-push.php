<pre><?php
for( $i = 1; $i < 42; $i++ ){
    $ar[] = $i; #array push
}
echo implode(",", $ar ); #把陣列接起來成字串
#explode() #切割字串成陣列
echo "\n";
shuffle($ar); #亂數排序
echo implode(",", $ar); #把陣列接起來成字串
echo "\n";

?></pre>