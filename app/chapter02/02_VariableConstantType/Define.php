<?php

// スカラー値
define('HELLO_WORLD', "Hello world.");
echo HELLO_WORLD; // 使うときはconstと同じ

// スカラー式
define('JAPANESE_WORLD', HELLO_WORLD.'; こんにちは世界');

function add(int $a, int $b): int
{
    return $a + $b;
}

// 関数の結果を定数として定義
define('ADD_CONST', add(1, 2));
