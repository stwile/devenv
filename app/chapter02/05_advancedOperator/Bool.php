<?php

$a = true;
$b = true;
$c = false;

// 論理積
$and1 = $a && $b;
echo var_export($and1) . "\n"; // 出力: true

$and2 = $a and $b;
echo var_export($and2) . "\n"; // 出力: true

$and3 = $a && $c;
echo var_export($and3) . "\n"; // 出力: false

// $and4に$a値を代入してから"and"演算子を評価するが、結果が$and4に代入されません
$and4 = $a and $c;
echo var_export($and4) . "\n"; // 出力: true

// 論理和
$or1 = $a || $b;
echo var_export($or1) . "\n"; // 出力: true

$or2 = $a or $b;
echo var_export($or2) . "\n"; // 出力: true

$or3 = $a || $c;
echo var_export($or3) . "\n"; // 出力: true

// $or4$a値を代入してから"or"演算子を評価するが、結果が$or4に代入されません
$or4 = $a or $c;
echo var_export($or4) . "\n"; // 出力: true

// 否定
$not = !$a;
echo var_export($not) . "\n"; // 出力: false

// 排他的論理和
$xor = $a xor $c;
echo var_export($xor) . "\n"; // 出力: true
