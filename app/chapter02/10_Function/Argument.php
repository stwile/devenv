<?php

// 値渡し
function talk(string $message){
    echo "$message\n";
}

// リファレンス渡し
function referenceUp(int &$ref){
    $ref += 1;
}

// デフォルト引数
function defaultArgs(int $param1 = 1, int $param2 = 10){
    echo "param1: {$param1}, param2: {$param2}";
}

// 可変長引数
function dumpArguments(int ...$numbers){
    var_dump($numbers);
}

// 名前付き引数
defaultArgs(param2:100);
