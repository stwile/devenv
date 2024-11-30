<?php

// スカラー値
const HELLO_WORLD = 'Hello World';

echo HELLO_WORLD; // 定数は$記号不要

// スカラー式
const JAPANESE_WORLD = HELLO_WORLD . 'は「こんにちは世界」';

function add(int $a, int $b): int
{
    return $a + $b;
}

//これはダメ(Fatal errorが発生する)
const ERROR_CONST = add(1, 2);
