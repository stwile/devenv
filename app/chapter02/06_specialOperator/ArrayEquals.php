<?php

$array1 = ['果物1' => 'りんご', '果物2' => 'バナナ'];
$array2 = ['果物2' => 'バナナ', '果物1' => 'りんご']; // 同じ内容だがキーの順序が異なる
$array3 = ['果物1' => 'りんご', '果物2' => 'さくらんぼ']; // 内容が異なる
$array4 = ['果物1' => 'りんご', '果物2' => 'バナナ', '果物3' => 'チェリー']; // 内容とサイズが異なる

var_dump($array1 == $array2); // 出力: bool(true) (内容が同じ)
var_dump($array1 === $array2); // 出力: bool(false) (キーの順序が異なるため)
var_dump($array1 != $array3); // 出力: bool(true) (内容が異なる)
var_dump($array1 !== $array3); // 出力: bool(true) (内容が異なる)
var_dump($array1 == $array4); // 出力: bool(false) (内容とサイズが異なる)
var_dump($array1 === $array4); // 出力: bool(false) (内容とサイズが異なる)
