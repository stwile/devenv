<?php
$float = PHP_FLOAT_MAX;
var_dump($float); // 出力: float(1.7976931348623157E+308)


$a = 0.1 * 3;
$b = 0.3;
var_dump($a == $b); // 出力: bool(false)

$epsilon = 0.00001;

if(abs($a - $b) < $epsilon) {
    echo "一致しているとみなす";
}
