<?php
// 64bit環境で実行
$integer = PHP_INT_MAX;

var_dump($integer); // 出力: int(9223372036854775807)

$overflow = PHP_INT_MAX + 1;

var_dump($overflow); // 出力: float(9.223372036854776E+18)
