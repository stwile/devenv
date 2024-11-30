<?php
$a = 5;
$b = "5";

var_dump($a == $b);  // true: 値が等しい
var_dump($a != $b);  // false: 値が等しくない
var_dump($a <> $b);  // false: 値が等しくない ( != と同じ意味)
var_dump($a === $b); // false: 値は等しいが型が異なる
var_dump($a !== $b); // true: 値は等しいが型が異なる

$c = 10;
$d = 5;

var_dump($c == $d);  // false: 値が等しくない
var_dump($c != $d);  // true: 値が等しくない
var_dump($c <> $d);  // true: 値が等しくない ( != と同じ意味)
var_dump($c === $d); // false: 値が等しくない
var_dump($c !== $d); // true: 値が等しくない
