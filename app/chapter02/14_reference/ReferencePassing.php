<?php
function change(int &$origin){
    $origin = 5; // 変数の値を変える
}

$test = 10;
change($test);
echo $test;// 出力: 5