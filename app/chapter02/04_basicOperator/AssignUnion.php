<?php

$a = 10;

// 算術演算子との複合演算子
$a += 10; // $a = $a + 10

$a = 'aaa';

// 文字列結合代入演算子
$a .= 'bbb'; // $a = $a . 'bbb'

$a = null;

// NULL合体演算子との複合演算子
$a ??= 'default'; // $a が null なら 'default' を代入
